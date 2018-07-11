<?php
/**
 * Search History Page
 *
 * @author: John Dave Lagdameo
 * @since 20180712
 */

// Initialize Search History Class
include("classes/SearchHistory.php");
$SearchHistory = new SearchHistory;

?>

<?php include("templates/header.php"); ?>

    <!-- container -->
    <div class="container" id="wrapper">
        <h3>Search History</h3>
        <hr/>

        <table class="table" id="table-list">
            <thead>
            <tr>
                <th scope="col">Datetime</th>
                <th scope="col">Query</th>
            </tr>
            </thead>
            <tbody>
            <?php echo $SearchHistory->ListSearchHistory(); ?>
            </tbody>
        </table>
    </div>
    <!-- end container-->

<?php include("templates/footer.php"); ?>