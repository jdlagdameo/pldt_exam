<?php
/**
 * Job Search Page
 *
 * @author: John Dave Lagdameo
 * @since 20180712
 */

// Initialize JobSearch Class
include("classes/JobSearch.php");
$JobSearch = new JobSearch;

// Validate If User Enter Position Keyword
$position = "";
if (isset($_GET['position'])) {
    $position = trim($_GET['position']);
    if ($position != "") {
        $result = $JobSearch->SearchResult($position);
        $html = $result["html"];
        $did_you_mean = $result["did_you_mean"];
    }
}
?>

<?php include("templates/header.php"); ?>

    <!-- container -->
    <div class="container" id="wrapper">
        <h3>Job Search</h3>
        <hr/>

        <!-- form -->
        <form id="form" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>" style="margin-bottom: 15px;">
            <input type="text" class="form-control" id="position" name="position" placeholder="Search Job Position"
                   autocomplete="off"/>
        </form>
        <!-- form -->

        <?php

        if ($position != "") { ?>
            <!-- Did You Mean Link -->
            <?php if ($did_you_mean != "") { ?>
                <p>Did you mean
                    <b>
                        <i>
                            <a href="job_search.php?position=<?php echo $did_you_mean; ?>"><?php echo $did_you_mean; ?></a>
                        </i>
                    </b>
                </p>
            <?php } ?>

            <!-- table -->
            <table class="table" id="table-list">
                <thead>
                <tr>
                    <th scope="col">Position</th>
                    <th scope="col">Agency</th>
                    <th scope="col">Country</th>
                    <th scope="col">Date Approved</th>
                </tr>
                </thead>
                <tbody>
                <?php echo $html; ?>
                </tbody>
            </table>
            <!-- end table -->
        <?php } else { ?>
            <!-- card -->
            <div class="card">
                <div class="card-body">
                    <p>No result/s to show.</p>
                </div>
            </div>
            <!-- end card -->
        <?php } ?>
    </div>
    <!-- end container -->

<?php include("templates/footer.php"); ?>