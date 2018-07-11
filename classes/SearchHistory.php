<?php

include "config.php";

/**
 * SearchHistory Class
 *
 * @author: John Dave Lagdameo
 * @since: 20181107
 *
 */
class SearchHistory
{
    /**
     * @var mysqli
     */
    protected $conn;

    /**
     * SearchHistory constructor.
     */
    public function __construct()
    {
        $this->conn = mysqli_connect(SERVER, USERNAME, PASSWORD, DB);

        // Trigger Update Search History
        $this->FetchSearchHistory();
    }

    /**
     * List Search History
     *
     * @return string
     */
    function ListSearchHistory()
    {
        $query = "SELECT datetime, query 
                  FROM search_history";
        $result = mysqli_query($this->conn, $query);
        $html = "";
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $html .= '<tr>
                        <td scope="row">' . $row['datetime'] . '</td>
                         <td>' . $row['query'] . '</td>
                    </tr>';
        }
        return $html;
    }

    /**
     * Retrieve and Insert Data From API
     */
    function FetchSearchHistory()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://dev0.indigoresearch.xyz/pgc/api/history/search/user/09358433275",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $dec_response = json_decode($response);

        foreach ($dec_response as $key => $val) {
            $id = $val->id;
            $datetime = $val->datetime;
            $query = $val->query;
            $user_id = $val->user_id;
            // Validate first if id already added - id -> unique
            if(!$this->SearchHistoryExists($id)){
                $query = "INSERT INTO search_history VALUES($id,'$datetime','$query','$user_id')";
                $result = mysqli_query($this->conn, $query) or die("Error in adding record.");
            }
        }

    }

    /**
     * Validate if Search History already registered
     *
     * @param $id
     * @return bool
     */
    function SearchHistoryExists($id){
        $query  = "SELECT count(id) as ctr
                   FROM search_history 
                   WHERE id = '$id'";
        $result = mysqli_query($this->conn, $query) or die("Error in adding record.");
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $row['ctr'] > 0;
    }
}