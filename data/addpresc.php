
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<body>
    <div class="container"style="max-width: 700px;">


    
            <div class="row2">
                <div class="col-lg-12">
                    <div id="inputFormRow2">
                        <div class="input-group mb-3">
                            <input required style="width:100%;" type="text" name="npre[]"  placeholder="Enter Prescriptions" autocomplete="off">
                            <div class="input-group-append2">
                            <form action="">
                                <button style="width:100%;padding:5px;margin:5px;background-color:#ffcccb" id="removeRo" type="button" class="btn btn-danger">Remove</button>
                            </div>
                            <div id="newRow2"></div>
                    <button style="width:100%;padding:5px;margin:5px;background-color:	#7FFF00" id="addRow2" type="button" class="btn btn-info">Add Row</button>
                </div>
                        </div>
                    </div>

            
            </div>
        </form>
    </div>

    <script type="text/javascript">
        $("#addRow2").click(function () {
            var html = '';
            html += '<div id="inputFormRow2">';
            html += '<div class="input-group2">';
            html += '<input style="width:100%;" type="text" name="npre[]" class="m-input" placeholder="Enter Prescription" autocomplete="off">';
            html += '<div class="input-group-append2">';
            html += '<button style="width:100%;padding:5px;margin:5px;background-color:#ffcccb" id="removeRow2" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newRow2').append(html);
        });
        $(document).on('click', '#removeRow2', function () {
            $(this).closest('#inputFormRow2').remove();
        });
    </script>
</body>
</html>