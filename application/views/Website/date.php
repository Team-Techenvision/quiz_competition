                              <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>

   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <div class="demo">

<p>Date: <input type="text" id="datepicker"></p>

</div><!-- End demo -->
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

<script>
    $(function() {

        $( "#datepicker" ).datepicker({ 
            changeYear: true,
            minDate: '',
            maxDate: '0M -3Y ',
        });
    });

</script>

public function date(){

    $this->load->view('Website/Include/head');
    $this->load->view('Website/date');
    $this->load->view('Website/Include/footer');
}