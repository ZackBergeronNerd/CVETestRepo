<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\DomCrawler\Crawler;

class CrawlWebsites extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'crawl:websites';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Crawl all packages that have notify_on_change enabled and notify package owners if their package has changed.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire() {
		if(count($user_websites = UserWebsite::where('notify_on_change', 1)->get())) {
			foreach($user_websites as $user_website) {
				$websiteURL = $user_website->website->domain;
				$has_changed = false;
				Log::info("Started crawling {$user_website->website->name} ({$websiteURL})");
				foreach($user_website->page()->get() as $page) {
	                $pageHTML = file_get_contents($page->url);
	                $pageCrawler = new Crawler($pageHTML);

	                $contentHTML = $pageCrawler->filter(".cve-content")->html();
	                $new_hash = md5($contentHTML);
	                Log::info("New: {$new_hash} old {$page->hash}");
	                if($page->hash != $new_hash) {
	                	$page->hash = $new_hash;
	                	$page->save();
	                	$has_changed = true;
	                	Log::info("Page: {$page->url} has changed!");
	                }
		        }
		        if($has_changed) {
	        		Log::info("Package: {$user_website->website->name} has changed! Initiate Email!");
                } else {
                	Log::info("Package: {$user_website->website->name} has not changed at all... Do nothing");
                }
		        Log::info("Done crawling {$user_website->website->name} ({$websiteURL}) was crawled!");
			}
		}
	}
}
