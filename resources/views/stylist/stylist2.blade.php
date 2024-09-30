<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

    {{-- fontawesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
  table {
            width: 90%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        table, th, td {
            border: 1px solid #ccc; /* Lighter border color */
            text-align: center;
            padding: 15px;
        }

        th {
            background-color: #f8f8f8; /* Dimmed header color */
        }

        .available {
            color: #4caf50; /* Dimmed green */
            font-weight: bold;
        }

        .not-available {
            color: #f44336; /* Dimmed red */
            font-weight: bold;
        }

        button {
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            border-radius: 5px;
        }

        .booked-btn {
            background-color: #90ee90; /* Dimmed green */
            color: #fff;
            border: none;
        }

        .cancel-btn {
            background-color: #f08080; /* Dimmed red */
            color: #fff;
            border: none;
        }

        .booked-btn:hover, .cancel-btn:hover {
            opacity: 0.7;
        }

        h2, h3 {
            text-align: center;
            margin-top: 40px;
        }
</style>

<body>





  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Hair Stylists</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Hair</li>
          <li class="breadcrumb-item active">Stylist</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <h2>Stylist Schedule</h2>



<!-- Hair Stylist Table -->

<h3>Hair Stylists</h3>

<form action="{{ route('hair-stylists.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Stylist Name" required>

    <label for="available">Available:</label>
    <select name="available" id="available">
        <option value="1">Yes</option>
        <option value="0">No</option>
    </select>

    <label for="booked_appointments">Booked Appointments:</label>
    <input type="number" name="booked_appointments" id="booked_appointments" required>
    <button type="submit">Add Stylist</button>
</form>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th> Hair Stylist</th>
            <th>Available</th>
            <th>Booked Appointments</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($stylists as $stylist)
        <tr>
            <td>{{ $stylist->id }}</td>
            <td>{{ $stylist->name }}</td>
            <td class="{{ $stylist->available ? 'available' : 'not-available' }}">
                {{ $stylist->available ? 'Yes' : 'No' }}
            </td>
            <td>{{ $stylist->booked_appointments }}</td>
            <td><a  style="font-size:25px;"  class="fa-solid fa-trash-can text-danger" href="{{url('delete_hair' , $stylist->id)}}"></a></td>
        </tr>
        @endforeach
    </tbody>
</table>



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    function bookAppointment(type, stylistId) {
    // Logic to book an appointment
    alert(`Booking appointment for ${type} with ID: ${stylistId}`);
    // Optionally, send an AJAX request to update the database
}

function cancelAppointment(type, stylistId) {
    // Logic to cancel an appointment
    alert(`Canceling appointment for ${type} with ID: ${stylistId}`);
    // Optionally, send an AJAX request to update the database
}

  </script>

</body>

</html>
