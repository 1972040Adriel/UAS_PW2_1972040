<!--Nama : Adriel Rianson-->
<!--NRP  : 1972040-->
<?php


class AttendanceController
{
    public function attd()
    {
        $employee_id = $_SESSION['session_id'];
        $command = filter_input(INPUT_GET, 'cmd');
        if (isset($command)) {
            $cid = filter_input(INPUT_GET, 'cid');
            if (isset($cid)) {
                $wsResponse = Utility::curl_get(ApiService::ALL_ATTENDANCE_URL, array());
                $result = json_decode($wsResponse);
                $sendData = array('id' => $cid);
            }
        }
    }

   
}