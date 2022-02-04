<?php
    class Conection{
        public function conectar(){
        $info = mysqli_connect("localhost","root","","test");
        var_dump($info);
        }

        public function crearTabla(){
            $conn = mysqli_connect("localhost","root","","test");
            //$conn->query("CREATE TABLE publicaciones");
            $consulta="INSERT INTO publicaciones (titulo, descripcion, autor, fecha) VALUES (?,?,?,?)";
            $sentencia = $conn -> prepare($consulta);
            $sentencia->bind_param("ssss",$var2,$var3,$var4,$var5);
            $var2="Harry Potter y la Piedra Filosofal";
            $var3="J.K. Rowling";
            $var4="Harry Potter y la Piedra Filosofal";
            $var5="1999-05-25";

            $sentencia->execute();
            
        }

        public function consultarTabla(){
            $conn=mysqli_connect("localhost","root","","test");
            $consulta_select="select * from publicaciones";
            $resultado=mysqli_query($conn,$consulta_select);
            
            while($fila=mysqli_fetch_row($resultado)){
                echo "<p>".$fila[1]." - ".$fila[2]." - ".$fila[3]." - ".$fila[4]."</p>";
            }
        }
    }
?>