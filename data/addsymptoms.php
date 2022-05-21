
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<body>
    <div class="container"style="max-width: 700px;">


        
            <div class="row">
                <div class="col-lg-12">
                    <div id="inputFormRow">
                        <div class="input-group mb-3">
                            <input  type="text" name="nsym[]"  placeholder="Enter new Symptom" autocomplete="off">
                            <div class="input-group-append">
                            <form action="">
                                <button  style="width:100%;padding:5px;margin:5px;background-color:#ffcccb" id="removeRow" type="button" class="btn btn-danger">Remove</button>
                            </div>
                            <div id="newRow"></div>
                    <button  style="width:100%;padding:5px;margin:5px;background-color:	#7FFF00" id="addRow" type="button" class="btn btn-info">Add Row</button>
                </div>
                        </div>
                    </div>

            
            </div>
        </form>
    </div>

    <script type="text/javascript">
        $("#addRow").click(function () {
            var html = '';
            html += '<div id="inputFormRow">';
            html += '<div class="input-group">';
            html += '<input type="text" name="nsym[]" class="m-input" placeholder="Enter new Symptom" autocomplete="off">';
            html += '<div class="input-group-append">';
            html += '<button style="width:100%;padding:5px;margin:5px;background-color:#ffcccb"  id="removeRow" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
        });
        $(document).on('click', '#removeRow', function () {
            $(this).closest('#inputFormRow').remove();
        });
    </script>
</body>
</html>