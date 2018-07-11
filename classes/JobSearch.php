<?php
/**
 * Job Search Class
 *
 * @author: John Dave Lagdameo
 * @since: 20181107
 *
 */
class JobSearch
{
    /**
     * Search Jobs
     *
     * @param $position
     * @return array
     */
    function SearchResult($position){
        $position = urlencode($position);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://dev0.indigoresearch.xyz/pgc/api/recommend/user/09358433275?position=$position",
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

        // convert to json
        $dec_response = json_decode($response);

        $html = "";
        $did_you_mean = $dec_response->did_you_mean;
        foreach ($dec_response->job_list as $key => $val) {
            $meta = $val->meta;
            $html .= '<tr>
                           <td>' . $meta->Position . '</td>
                           <td>' . $meta->Agency . '</td>
                           <td>' . $meta->Country . '</td>
                           <td>' . $meta->{'Date Approved'} . '</td>
                      </tr>';
        }

        return compact("html","did_you_mean");
    }


}