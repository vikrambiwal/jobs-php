<?php

require_once "Services_Careerjet.php" ;

$api = new Services_Careerjet('en_IN') ;

$result = $api->search(array( 'keywords' => 'java',
                              'location' => 'India')
                       ) ;

if ( $result->type == 'JOBS' ){
  echo "Found ".$result->hits." jobs" ;
  echo " on ".$result->pages." pages\n" ;
  $jobs = $result->jobs ;
  
  foreach( $jobs as &$job ){
    echo " URL:     ".$job->url."\n" ;
    echo " TITLE:   ".$job->title."\n" ;
    echo " LOC:     ".$job->locations."\n";
    echo " COMPANY: ".$job->company."\n" ;
    echo " SALARY:  ".$job->salary."\n" ;
    echo " DATE:    ".$job->date."\n" ;
    echo " DESC:    ".$job->description."\n" ;
    echo "\n" ;
  }
}

if ( $result->type == 'LOCATIONS' ){
  $locations = $result->locations ;
  foreach ( $locations as &$loc ){
    echo $loc."\n" ;
  }
}

?>
