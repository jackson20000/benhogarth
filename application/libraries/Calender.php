<?php

class Calender {
    function getClient()
    {
    require_once(__DIR__."/gcal/vendor/autoload.php");
    $client = new Google_Client();
    $client->setApplicationName('Google Calendar API PHP Quickstart');
    $client->setScopes(Google_Service_Calendar::CALENDAR);
    $client->setAuthConfig(__DIR__.'/gcal/credentials.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');

    // Load previously authorized token from a file, if it exists.
    // The file token.json stores the user's access and refresh tokens, and is
    // created automatically when the authorization flow completes for the first
    // time.
    $tokenPath = __DIR__.'/gcal/token.json';
    if (file_exists($tokenPath)) {
        $accessToken = json_decode(file_get_contents($tokenPath), true);
        $client->setAccessToken($accessToken);
    }

    // If there is no previous token or it's expired.
    if ($client->isAccessTokenExpired()) {
        // Refresh the token if possible, else fetch a new one.
        if ($client->getRefreshToken()) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        } else {
            // Request authorization from the user.
            $authUrl = $client->createAuthUrl();
            printf("Open the following link in your browser:\n%s\n", $authUrl);
            print 'Enter verification code: ';
            $authCode = trim(fgets(STDIN));

            // Exchange authorization code for an access token.
            $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
            $client->setAccessToken($accessToken);

            // Check to see if there was an error.
            if (array_key_exists('error', $accessToken)) {
                throw new Exception(join(', ', $accessToken));
            }
        }
        // Save the token to a file.
        if (!file_exists(dirname($tokenPath))) {
            mkdir(dirname($tokenPath), 0700, true);
        }
        file_put_contents($tokenPath, json_encode($client->getAccessToken()));
    }
    return $client;
    }

    public function createEvent($data){
        // $start = $end = new DateTime(str_replace('/', '-', $data['date'])." ".str_replace('/', '-', $data['stime']));
        $start =  DateTime::createFromFormat('d/m/y H:i', $data['date'].' '.$data['stime']);
        $end = DateTime::createFromFormat('d/m/y H:i', $data['date'].' '.$data['etime']);

        $client = $this->getClient();
        $service = new Google_Service_Calendar($client);
        $event = new Google_Service_Calendar_Event(array(
        'summary' => 'Benhogarth Studio Booking',
        'location' => $data['studio'],
        'description' => 'Booking from '.$data['name'],
        'start' => array(
            'dateTime' => $start->format(DateTime::ISO8601),
            'timeZone' => 'America/Los_Angeles',
        ),
        'end' => array(
            'dateTime' => $end->format(DateTime::ISO8601),
            'timeZone' => 'America/Los_Angeles',
        ),
        ));

        $calendarId = 'primary';
        $event = $service->events->insert($calendarId, $event);
    }
}