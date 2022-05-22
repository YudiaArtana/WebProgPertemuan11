<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container">
        <div id="konten"></div>
    </div>

            

    <script>
        const jsonData = new XMLHttpRequest()

        jsonData.open("GET","../server/listdata.php")
        jsonData.send()

        jsonData.onload = function(){
            const myData = JSON.parse(this.responseText)
            // console.log(myData)

            let hasil = "<h3>Daftar Nama Mahasiswa</h3>"
            hasil += "<table class='table'>"
            hasil += "  <thead>"
            hasil += "      <tr>"
            hasil += "          <th scope='col'>No</th>"
            hasil += "          <th scope='col'>NIM</th>"
            hasil += "          <th scope='col'>Nama</th>"
            hasil += "          <th scope='col'>Jenis Kelamin</th>"
            hasil += "          <th scope='col'><a class='btn btn-primary' href='formdatamhs.php'>Tambah Data</a></th>"
            hasil += "      </tr>"
            hasil += "  </thead>"
            hasil += "  <tbody>"

            let no = 1
            for(i=0; i<myData.length; i++){

                let jk 
                if(myData[i][2] == "L")
                    jk = "Laki - Laki"
                else
                    jk = "Perempuan"

                hasil += "<tr>"
                hasil += "  <td>"+no+"</td>"
                hasil += "  <td>"+myData[i][0]+"</td>"
                hasil += "  <td>"+myData[i][1]+"</td>"
                hasil += "  <td>"+jk+"</td>"
                hasil += "     <td><a class='btn btn-success' href='formeditmhs.php?nim='>EDIT</a> <a class='btn btn-danger' href='formhapusmhs.php?nim='>HAPUS</a></td>"
                hasil += "</tr>"

                no++


                
            }
 
            hasil += "  </tbody>"
            hasil += "</table>"

            document.getElementById("konten").innerHTML = hasil;

        }
    </script>


    
</body>
</html>