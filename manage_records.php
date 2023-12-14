<?php 
include('includes/db_config.php');
include('includes/header.php');
include('includes/functions.php');

$entity = $_GET['entity'] ?? 'doctor'; // Default to 'doctor' if no entity is specified
$operation = $_GET['operation'] ?? 'view';

switch ($operation) {
    case 'view':
        $records = getAllRecords($entity);
        $headers = generateTableHeaders($entity);
        // Include a file that displays the records in a table
        include('view_records.php');
        break;

    case 'add':
        // Include a file that shows a form to add a new record
        include('add_record_form.php');
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
