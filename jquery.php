<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS - 3</title>
    <style type="text/css">
        .bold { font-weight: bold;}
        .italic { font-style: italic;}
        .underline { text-decoration: underline;}
        p {
            width: 100px;
            min-height: 50px;
            border: 1px solid black;
            font-size: 32px;
            text-align: center;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>
<body>
    <p>&nbsp;</p>
    <label>Paragraph Symbol:</label>
    <select id="cboText">
        <option value="&nbsp;">-</option>
        <option value="@">@</option>
        <option value="#">#</option>
        <option value="$">$</option>
        <option value="%">%</option>
        <option value="^">^</option>
        <option value="&">&</option>
        <option value="*">*</option>
    </select>
    <br>
    <label>Font Style:</label>
    <input type="checkbox" class="chkStyle" value="bold">
    <label>Text Bold:</label>
    <input type="checkbox" class="chkStyle" value="italic">
    <label>Text Italic:</label>
    <input type="checkbox" class="chkStyle" value="underline">
    <label>Text Underline:</label>
    <br>
    <label>Font Size:</label>
    <button id="btnPlus">+</button>
    <button id="btnMin">-</button>
    <script>
        $(".chkStyle").change(function() {
            $("p").removeClass("bold italic underline");

            $(".chkStyle").each(function() {
                if ($(this).is(":checked")) {
                    $("p").addClass($(this).val());
                }
            });
        });
        
        $("#cboText").change(function(){
        $("p").html($(this).val());
        });

        $("#btnPlus").click(function(){
        var currentSize = parseInt($("p").css("font-size"));

        var newSize = currentSize + 2;

        $("p").css("font-size", newSize + "px");
        });

        $("#btnMin").click(function(){
        var currentSize = parseInt($("p").css("font-size"));

        var newSize = currentSize - 2;

        $("p").css("font-size", newSize + "px");
        });

  </script>
</body>
</html>