<?php
        $db = mysqli_connect("localhost","root","","pwa");

        function query($query){
            global $db;
            $result = mysqli_query($db, $query);
            $box = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $box[] = $row;
            }
            return $box;
        }
        function  add($data){
            global $db;
            $name = htmlspecialchars($data["name"]);
            $description = htmlspecialchars($data["description"]);
            $genre = htmlspecialchars($data["genre"]);
            $price = htmlspecialchars($data["price"]);

            $query = "INSERT INTO item
                        VALUES
                    ('','$name','$description','$genre','$price')
                    ";
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
        }
        function delete($id){
            global $db;
            mysqli_query($db, "DELETE FROM item WHERE id = $id");
            return mysqli_affected_rows($db);
        }

?>