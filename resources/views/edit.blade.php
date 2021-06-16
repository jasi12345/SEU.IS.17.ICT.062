<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border ="1" width="50%">
        <tr>
            <th> Name</th>
            <th> Date of Birth</th>
            <th>Telephone No</th>
            <th> NIC No</th>
            <th> Gender</th>
          
        </tr>
    @foreach ( $data as $x)
     <tr>
            
            <td> {{$x['name']}} </td>
            <td> {{$x['dob']}} </td>
            <td> {{$x['telno']}}  </td>
            <td> {{$x['nicno']}}   </td>
            <td> {{$x['gender']}} </td>
            <td> <a href={{"delete/".$x['name']}}>Delete</td>
            <td> <a href={{"edit/".$x['name']}}>Delete</td>
     </tr>

    </table>
    @endforeach
</body>
</html>