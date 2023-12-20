<?php 
include('includes/db_config.php');
include('includes/header.php');
include('includes/functions.php');

$entity = $_GET['entity'] ?? 'default';
$operation = $_GET['operation'] ?? 'view';

switch ($operation) {
    case 'insert':
            // Perform the insert operation
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Extract data from $_POST and insert into the database

                echo $entity;

                $insertSuccess = createRecord($entity, $_POST);
                if ($insertSuccess) {
                    // Redirect to the list page with a success message
                    echo "Added Successfully!";
                    header("Location: list_records.php?entity=$entity");
                } else {
                    // Handle the error
                    echo "Some Error Occured!";
                }
            }
            exit;
            break;

    case 'view':
        $records = getAllRecords($entity);
        $headers = generateTableHeaders($entity);
        // Include a file that displays the records in a table
        include('view_records.php');
        break;

    case 'add':
        // Include a file that shows a form to add a new record
        header("Location: add_record_form.php?entity=$entity");
        exit;
        break;

    case 'edit':
        $recordId = $_GET['id'] ?? null;
        if ($recordId) {
            $record = getRecordById($entity, $recordId);
            // Include a file that shows a form to edit the record
            include('edit_record_form.php');
        }
        break;

    case 'delete':
        $recordId = $_GET['id'] ?? null;
        if ($recordId) {
            deleteRecord($entity, $recordId);
            // Redirect to the view page
            header("Location: manage_records.php?entity=$entity");
        }
        break;

    default:
        echo "<p>Invalid operation or entity.</p>";
        break;
}

include('includes/footer.php');
?>
