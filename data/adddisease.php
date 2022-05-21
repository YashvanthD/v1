
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<body>
    <div class="container"style="max-width: 700px;">
       
            <div class="row1">
                <div class="col-lg-12">
                    <div id="inputFormRow1">
                        <div class="input-group1">
                            <input required style="width:100%" type="text" name="ndis[]" class="m-input" placeholder="Enter Disease" autocomplete="off">
                            <div class="input-group-append1">
                            <form action="">
                                <button  style="width:100%;padding:5px;margin:5px;background-color:#ffcccb" id="removeRo" type="button" class="btn btn-danger">Remove</button>
                            </div>
                            <div id="newRow1"></div>
                    <button   style="width:100%;padding:5px;margin:5px;background-color:	#7FFF00" id="addRow1" type="button" class="btn btn-info">Add Row</button>
                </div>
                        </div>
                    </div>

            
            </div>
        </form>
    </div>

    <script type="text/javascript">
        $("#addRow1").click(function () {
            var html = '';
            html += '<div id="inputFormRow1">';
            html += '<div class="input-group1">';
            html += '<input  style="width:100%" type="text" name="ndis[]" class="m-input" placeholder="Enter Disease" autocomplete="off">';
            html += '<div class="input-group-append1">';
            html += '<button   style="width:100%;padding:5px;margin:5px;background-color:#ffcccb" id="removeRow1" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newRow1').append(html);
        });
        $(document).on('click', '#removeRow1', function () {
            $(this).closest('#inputFormRow1').remove();
        });
    </script>
</body>
</html>