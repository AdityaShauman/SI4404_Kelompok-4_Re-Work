<?php
    require "db_connector.php";
    $id = $_GET["id"];

    function deletemateri($id) {
        global $connect;
        $query = "DELETE FROM materi WHERE idmateri=$id";
        mysqli_query($connect, $query);
        return mysqli_affected_rows($connect);
    }

    if ( deletemateri($id) > 0 ) {
        echo "
            <script>
                alert('Data deleted');
                    document.location.href = '/Re-Work/page_admin/materi.php';
                </script>
            ";
    } else {
        echo "
            <script>
                    alert('Data not deleted');
                    document.location.href = '/Re-Work/page_admin/materi.php';
                </script>
            ";
    }

    function deleteloker($id) {
        global $connect;
        $query = "DELETE FROM loker WHERE idloker=$id";
        mysqli_query($connect, $query);
        return mysqli_affected_rows($connect);
    }

    if ( deleteloker($id) > 0 ) {
        echo "
            <script>
                alert('Data deleted');
                    document.location.href = '/Re-Work/page_admin/loker.php';
                </script>
            ";
    } else {
        echo "
            <script>
                    alert('Data not deleted');
                    document.location.href = '/Re-Work/page_admin/loker.php';
                </script>
            ";
    }
?>