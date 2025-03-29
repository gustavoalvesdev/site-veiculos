<?php 

class Site 
{

    public function getLogo() {
        global $conn;

        $logo = '';

        $sql = "SELECT logo FROM site_info LIMIT 1";
        $sql = $conn->query($sql);

        if ($sql->rowCount() > 0) {
            $logo = $sql->fetch()[0];
        }

        return $logo;
    }

}
