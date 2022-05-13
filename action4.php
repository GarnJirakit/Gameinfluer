<?php

if(isset($_POST["action"]))
{
    include('database_connection.php');
    if($_POST["action"] == 'fetch')
    {
        $output = '';
        $query = "SELECT * FROM ts_user WHERE user_type = 'user' ORDER BY name ASC";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $output .='
        <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="font-weight: normal;">รายชื่อแอดมิน</h3>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
        <table width="100%">
            <thead>
                <tr>
                    <td>ชื่อ</td>
                    <td>อีเมล</td>
                    <td>สถานะ</td>
                    <td>Action</td>
                </tr>
            </thead>
        ';
        foreach($result as $row)
        {
            $status = '';
            if($row["status"] == 'Active')
            {
                $status = '<span class="label label-success">Active</span>';
            }
            else
            {
                $status = '<span class="label label-danger">Inactive</span>';
            }
            $output .= '
            <tr>
                <td>'.$row["name"].'</td>
                <td>'.$row["email"].'</td>
                <td>'.$status.'</td>
                <td><button type="button" name="action" class="btn btn-info btn-xs action" data-id="'.$row["id"].'" data-status="'.$row["status"].'">Action</button></td>
            </tr>
            ';
        }
        $output .= '</table>
        </div>
                        </div>
                    </div>
                </div>
            </div>';
        echo $output;
    }
    if($_POST["action"] == 'change_status')
    {
        $status = '';
        if($_POST['status'] == 'Active')
        {
            $status = 'Inactive';
        }
        else{
            $status = 'Active';
        }
        $query = 'UPDATE ts_user SET status = :status WHERE id = :id';
        $statement = $connect->prepare($query);
        $statement->execute(
            array(
                ':status' => $status,
                ':id' => $_POST['id']
            )
        );
        $result = $statement->fetchAll();
        if(isset($result))
        {
            echo '<div class="alert alert-success"><i class="fas fa-check-circle"></i> สถานะอินฟลูเอนเซอร์ได้ถูกเปลี่ยนเป็น <strong>'.$status.'</strong></div>';
        }
    }

}

?>