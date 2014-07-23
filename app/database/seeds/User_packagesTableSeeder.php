<?php

class User_packagesTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	DB::table('user_packages')->delete();

        $user_packages = array(
        	['user_id' => 1, 'package_id' => 1, 'owner' => 1, 'referral' => 0, 'agent' => 0, 'slug' => null, 'salesforce_tracking' => null],
            ['user_id' => 2, 'package_id' => 1, 'owner' => 0, 'referral' => 0, 'agent' => 1, 'slug' => 'hull',
                'salesforce_tracking' => '<script type="text/javascript">
    var saTracker;
    jQuery.getScript("http://martiscamp.na7.force.com/cve/apex/clearview__saJS", function() {
        saTracker = new jQuery.sa();
        saTracker.eventTrack({type: "012A0000000nsdkIAA", pckge: "a0TA00000055exO", success: function() {
            if(saTracker.query("src") == "em") {
                saTracker.eventTrack({type: "012A0000000nsdiIAA", pckge: "a0TA00000055exO"});
            }
        }});
    });
</script>'],
            ['user_id' => 3, 'package_id' => 1, 'owner' => 0, 'referral' => 0, 'agent' => 1, 'slug' => 'mikals',
                'salesforce_tracking' => '<script type="text/javascript">
    var saTracker;
    jQuery.getScript("http://martiscamp.na7.force.com/cve/apex/clearview__saJS", function() {
        saTracker = new jQuery.sa();
        saTracker.eventTrack({type: "012A0000000nsdkIAA", pckge: "a0TA00000055exi", success: function() {
            if(saTracker.query("src") == "em") {
                saTracker.eventTrack({type: "012A0000000nsdiIAA", pckge: "a0TA00000055exi"});
            }
        }});
    });
</script>'],
            ['user_id' => 4, 'package_id' => 1, 'owner' => 0, 'referral' => 0, 'agent' => 1, 'slug' => 'hoopingarner',
                'salesforce_tracking' => '<script type="text/javascript">
    var saTracker;
    jQuery.getScript("http://martiscamp.na7.force.com/cve/apex/clearview__saJS", function() {
        saTracker = new jQuery.sa();
        saTracker.eventTrack({type: "012A0000000nsdkIAA", pckge: "a0TA00000055exY", success: function() {
            if(saTracker.query("src") == "em") {
                saTracker.eventTrack({type: "012A0000000nsdiIAA", pckge: "a0TA00000055exY"});
            }
        }});
    });
</script>'],
            ['user_id' => 5, 'package_id' => 1, 'owner' => 0, 'referral' => 0, 'agent' => 1, 'slug' => 'murrell',
                'salesforce_tracking' => '<script type="text/javascript">
    var saTracker;
    jQuery.getScript("http://martiscamp.na7.force.com/cve/apex/clearview__saJS", function() {
        saTracker = new jQuery.sa();
        saTracker.eventTrack({type: "012A0000000nsdkIAA", pckge: "a0TA00000055exd", success: function() {
            if(saTracker.query("src") == "em") {
                saTracker.eventTrack({type: "012A0000000nsdiIAA", pckge: "a0TA00000055exd"});
            }
        }});
    });
</script>'],
            ['user_id' => 6, 'package_id' => 1, 'owner' => 0, 'referral' => 0, 'agent' => 1, 'slug' => 'barrett',
                'salesforce_tracking' => '<script type="text/javascript">
    var saTracker;
    jQuery.getScript("http://martiscamp.na7.force.com/cve/apex/clearview__saJS", function() {
        saTracker = new jQuery.sa();
        saTracker.eventTrack({type: "012A0000000nsdkIAA", pckge: "a0TA00000055exn", success: function() {
            if(saTracker.query("src") == "em") {
                saTracker.eventTrack({type: "012A0000000nsdiIAA", pckge: "a0TA00000055exn"});
            }
        }});
    });
</script>'],
            ['user_id' => 7, 'package_id' => 1, 'owner' => 0, 'referral' => 0, 'agent' => 1, 'slug' => 'atkins',
                'salesforce_tracking' => '<script type="text/javascript">
    var saTracker;
    jQuery.getScript("http://martiscamp.na7.force.com/cve/apex/clearview__saJS", function() {
        saTracker = new jQuery.sa();
        saTracker.eventTrack({type: "012A0000000nsdkIAA", pckge: "a0TA00000055exT", success: function() {
            if(saTracker.query("src") == "em") {
                saTracker.eventTrack({type: "012A0000000nsdiIAA", pckge: "a0TA00000055exT"});
            }
        }});
    });
</script>'],
        ['user_id' => 7, 'package_id' => 1, 'owner' => 0, 'referral' => 0, 'agent' => 1, 'slug' => 'nina-kim',
                'salesforce_tracking' => '<script type="text/javascript">
    var saTracker;
    jQuery.getScript("http://martiscamp.na7.force.com/cve/apex/clearview__saJS", function() {
        saTracker = new jQuery.sa();
        saTracker.eventTrack({type: "012A0000000nsdkIAA", pckge: "a0TA00000056z2S", success: function() {
            if(saTracker.query("src") == "em") {
                saTracker.eventTrack({type: "012A0000000nsdiIAA", pckge: "a0TA00000056z2S"});
            }
        }});
    });
</script>'],
            ['user_id' => 8, 'package_id' => 2, 'owner' => 1, 'referral' => 0, 'agent' => 1, 'slug' => null,
                'salesforce_tracking' => '<script type="text/javascript">
    var saTracker;
    jQuery.getScript("http://kempf.na2.force.com/cve/apex/clearview__saJS", function() {
        saTracker = new jQuery.sa();
        saTracker.eventTrack({type: "01240000000IPWrAAO", pckge: "a0T40000001piEh", success: function() {
            if(saTracker.query("src") == "em") {
                saTracker.eventTrack({type: "01240000000IPWpAAO", pckge: "a0T40000001piEh"});
            }
        }});
    });
</script>'],
            ['user_id' => 9, 'package_id' => 2, 'owner' => 0, 'referral' => 0, 'agent' => 1, 'slug' => 'alex',
                'salesforce_tracking' => '<script type="text/javascript">
    var saTracker;
    jQuery.getScript("http://kempf.na2.force.com/cve/apex/clearview__saJS", function() {
        saTracker = new jQuery.sa();
        saTracker.eventTrack({type: "01240000000IPWrAAO", pckge: "a0T40000001piEm", success: function() {
            if(saTracker.query("src") == "em") {
                saTracker.eventTrack({type: "01240000000IPWpAAO", pckge: "a0T40000001piEm"});
            }
        }});
    });
</script>'],
        ['user_id' => 8, 'package_id' => 2, 'owner' => 1, 'referral' => 0, 'agent' => 1, 'slug' => 'mark-barker',
                'salesforce_tracking' => '<script type="text/javascript">
    var saTracker;
    jQuery.getScript("http://kempf.na2.force.com/cve/apex/clearview__saJS", function() {
        saTracker = new jQuery.sa();
        saTracker.eventTrack({type: "01240000000IPWrAAO", pckge: "a0T400000018a2z", success: function() {
            if(saTracker.query("src") == "em") {
                saTracker.eventTrack({type: "01240000000IPWpAAO", pckge: "a0T400000018a2z"});
            }
        }});
    });
</script>'],
        ['user_id' => 13, 'package_id' => 3, 'owner' => 1, 'referral' => 0, 'agent' => 0, 'slug' => null,
            'salesforce_tracking' => '<script type="text/javascript">
    var saTracker;
    jQuery.getScript("http://vinesofmendozapb.na15.force.com/cve/apex/clearview__saJS", function() {
        saTracker = new jQuery.sa();
        saTracker.eventTrack({type: "012i00000008CPWAA2", pckge: "a1Gi00000007Amy", success: function() {
            if(saTracker.query("src") == "em") {
                saTracker.eventTrack({type: "012i00000008CPUAA2", pckge: "a1Gi00000007Amy"});
            }
        }});
    });
</script>'],
        ['user_id' => 12, 'package_id' => 4, 'owner' => 1, 'referral' => 0, 'agent' => 0, 'slug' => null,
            'salesforce_tracking' => '<script type="text/javascript">
    var saTracker;
    jQuery.getScript("http://grandislevillas.na15.force.com/cve/apex/clearview__saJS", function() {
        saTracker = new jQuery.sa();
        saTracker.eventTrack({type: "012i0000000WtOiAAK", pckge: "a0pi0000001VNC4", success: function() {
            if(saTracker.query("src") == "em") {
                saTracker.eventTrack({type: "012i0000000WtOgAAK", pckge: "a0pi0000001VNC4"});
            }
        }});
    });
</script>'],
        ['user_id' => 13, 'package_id' => 3, 'owner' => 0, 'referral' => 0, 'agent' => 1, 'slug' => 'walberg',
            'salesforce_tracking' => null],
        ['user_id' => 12, 'package_id' => 4, 'owner' => 0, 'referral' => 0, 'agent' => 1, 'slug' => 'walberg',
            'salesforce_tracking' => '<script type="text/javascript">
    var saTracker;
    jQuery.getScript("http://grandislevillas.na15.force.com/cve/apex/clearview__saJS", function() {
        saTracker = new jQuery.sa();
        saTracker.eventTrack({type: "012i0000000WtOiAAK", pckge: "a0pi0000001sFUY", success: function() {
            if(saTracker.query("src") == "em") {
                saTracker.eventTrack({type: "012i0000000WtOgAAK", pckge: "a0pi0000001sFUY"});
            }
        }});
    });
</script>'],
        ['user_id' => 8, 'package_id' => 2, 'owner' => 0, 'referral' => 0, 'agent' => 1, 'slug' => 'walberg',
            'salesforce_tracking' => null],
        ['user_id' => 1, 'package_id' => 4, 'owner' => 0, 'referral' => 0, 'agent' => 1, 'slug' => 'ryan',
            'salesforce_tracking' => null],
        ['user_id' => 1, 'package_id' => 3, 'owner' => 0, 'referral' => 0, 'agent' => 1, 'slug' => 'ryan',
            'salesforce_tracking' => null],
        ['user_id' => 8, 'package_id' => 2, 'owner' => 1, 'referral' => 0, 'agent' => 1, 'slug' => 'mark',
                'salesforce_tracking' => '<script type="text/javascript">
    var saTracker;
    jQuery.getScript("http://kempf.na2.force.com/cve/apex/clearview__saJS", function() {
        saTracker = new jQuery.sa();
        saTracker.eventTrack({type: "01240000000IPWrAAO", pckge: "a0T40000001piEh", success: function() {
            if(saTracker.query("src") == "em") {
                saTracker.eventTrack({type: "01240000000IPWpAAO", pckge: "a0T40000001piEh"});
            }
        }});
    });
</script>'],
        ['user_id' => 15, 'package_id' => 5, 'owner' => 1, 'referral' => 0, 'agent' => 0, 'slug' => null,
            'salesforce_tracking' => '<script type="text/javascript">
    var saTracker;
    jQuery.getScript("http://vinesofmendozapb.na15.force.com/cve/apex/clearview__saJS", function() {
        saTracker = new jQuery.sa();
        saTracker.eventTrack({type: "012i00000008CPWAA2", pckge: "a1Gi00000007An8", success: function() {
            if(saTracker.query("src") == "em") {
                saTracker.eventTrack({type: "012i00000008CPUAA2", pckge: "a1Gi00000007An8"});
            }
        }});
    });
</script>'],
        ['user_id' => 16, 'package_id' => 6, 'owner' => 1, 'referral' => 0, 'agent' => 0, 'slug' => null,
            'salesforce_tracking' => '<script type="text/javascript">
    var saTracker;
    jQuery.getScript("http://vinesofmendozapb.na15.force.com/cve/apex/clearview__saJS", function() {
        saTracker = new jQuery.sa();
        saTracker.eventTrack({type: "012i00000008CPWAA2", pckge: "a1Gi00000007An3", success: function() {
            if(saTracker.query("src") == "em") {
                saTracker.eventTrack({type: "012i00000008CPUAA2", pckge: "a1Gi00000007An3"});
            }
        }});
    });
</script>'],
        ['user_id' => 12, 'package_id' => 4, 'owner' => 0, 'referral' => 0, 'agent' => 1, 'slug' => 'peter',
            'salesforce_tracking' => '<script type="text/javascript">
    var saTracker;
    jQuery.getScript("http://grandislevillas.na15.force.com/cve/apex/clearview__saJS", function() {
        saTracker = new jQuery.sa();
        saTracker.eventTrack({type: "012i0000000WtOiAAK", pckge: "a0pi0000001sczv", success: function() {
            if(saTracker.query("src") == "em") {
                saTracker.eventTrack({type: "012i0000000WtOgAAK", pckge: "a0pi0000001sczv"});
            }
        }});
    });
</script>'],
        ['user_id' => 12, 'package_id' => 4, 'owner' => 0, 'referral' => 0, 'agent' => 1, 'slug' => 'woody',
            'salesforce_tracking' => '<script type="text/javascript">
    var saTracker;
    jQuery.getScript("http://grandislevillas.na15.force.com/cve/apex/clearview__saJS", function() {
        saTracker = new jQuery.sa();
        saTracker.eventTrack({type: "012i0000000WtOiAAK", pckge: "a0pi0000001smFA", success: function() {
            if(saTracker.query("src") == "em") {
                saTracker.eventTrack({type: "012i0000000WtOgAAK", pckge: "a0pi0000001smFA"});
            }
        }});
    });
</script>'],
        ['user_id' => 11, 'package_id' => 3, 'owner' => 0, 'referral' => 0, 'agent' => 1, 'slug' => 'eric',
            'salesforce_tracking' => null],
        ['user_id' => 11, 'package_id' => 4, 'owner' => 0, 'referral' => 0, 'agent' => 1, 'slug' => 'eric',
            'salesforce_tracking' => null],
            ['user_id' => 12, 'package_id' => 4, 'owner' => 0, 'referral' => 0, 'agent' => 1, 'slug' => 'wendy',
            'salesforce_tracking' => '<script type="text/javascript">
    var saTracker;
    jQuery.getScript("http://grandislevillas.na15.force.com/cve/apex/clearview__saJS", function() {
        saTracker = new jQuery.sa();
        saTracker.eventTrack({type: "012i0000000WtOiAAK", pckge: "a0pi0000001swlS", success: function() {
            if(saTracker.query("src") == "em") {
                saTracker.eventTrack({type: "012i0000000WtOgAAK", pckge: "a0pi0000001swlS"});
            }
        }});
    });
</script>'],
        ['user_id' => 20, 'package_id' => 3, 'owner' => 0, 'referral' => 0, 'agent' => 1, 'slug' => 'michael',
            'salesforce_tracking' => '<script type="text/javascript">
    var saTracker;
    jQuery.getScript("http://vinesofmendozapb.na15.force.com/cve/apex/clearview__saJS", function() {
        saTracker = new jQuery.sa();
        saTracker.eventTrack({type: "012i00000008CPWAA2", pckge: "a1Gi00000007sLO", success: function() {
            if(saTracker.query("src") == "em") {
                saTracker.eventTrack({type: "012i00000008CPUAA2", pckge: "a1Gi00000007sLO"});
            }
        }});
    });
</script>'],
        );

        // Uncomment the below to run the seeder
        DB::table('user_packages')->insert($user_packages);
    }

}