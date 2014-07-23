<?php
class SnoozeAlert {

    public function fire($job, $data) {
        $website_opened = UserWebsiteOpen::find($data['user_website_open_id']);
        $website_opened->push_alert();

        $job->delete();
    }

}
