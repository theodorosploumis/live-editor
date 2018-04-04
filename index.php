<!DOCTYPE html>
<html>
<head>
    <title>Live CSS editor with jQuery and PHP</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script src="/assets/live-editor.js"></script>
    <script src="/assets/template-render.js"></script>
    <link rel="stylesheet" href="live-styles.css">

    <style type="text/css">

        body {
            background-color: #f5f5f5;
        }
        .row {
            margin: 50px auto;
            background: #fff;
            padding: 50px;
            border-radius: 10px;
        }
        label {
            min-width: 130px;
        }
        .btn-group {
            margin: 20px 0;
        }
        .js-edit {
            border: 1px dotted;
        }
    </style>

    <script>

    </script>
</head>

<body>

<section class="container">
    <div class="row">

        <div class="col-sm-12 col-md-8">
            <h1 class="node-01 css-editable" contenteditable="true" data-id="01">
                H1 title - Click to edit my style!
            </h1>
            <p class="node-02 css-editable" contenteditable="true" data-id="02">
                Here is some text 01.
            </p>
            <p class="node-03 css-editable" contenteditable="true" data-id="03">
                Here is some text 02.
            </p>
            <p class="node-04 css-editable" contenteditable="true" data-id="04">
                Here is some text 03.
            </p>

            <p class="node-05 css-editable" data-id="05">
                Here is some <b>text that is not editable</b>.
            </p>

        </div>

        <aside class="col-sm-12 col-md-4">

            <?php include_once("assets/editor.php"); ?>

            <div class="btn-group" role="group" aria-label="Actions">
                <button class="btn-save-styles btn btn-success">Save CSS locally</button>
                <button class="btn-download-styles btn btn-primary">Download CSS changes</button>
            </div>

        </aside>
        
        <div class="load-html"
             data-template="templates/example1.html"
             data-source="http://localhost:3000/person/1,data/company2.json,data/company1.json">
            <span style="color:red;">Data should load here</span>
        </div>

    </div>
</body>
</html>
