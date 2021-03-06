<!DOCTYPE html>
<html>
<head>
	<title>Rich text editor in JS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="../libs/css/all.css">
	<script src="../libs/js/font_awesome_connection.js"></script>
	<link rel="stylesheet" type="text/css" href="../libs/css/main_style.css">
</head>
<body onload="enableEditMode();">
	<center>
		<div class="container">
			<div class="main">
				<button onclick="execCmd('bold');"><i class="fa fa-bold"></i></button>
				<button onclick="execCmd('italic');"><i class="fa fa-italic"></i></button>
				<button onclick="execCmd('underline');"><i class="fa fa-underline"></i></button>
				<button onclick="execCmd('strikeThrough');"><i class="fa fa-strikethrough"></i></button>
				<button onclick="execCmd('justifyLeft');"><i class="fa fa-align-left"></i></button>
				<button onclick="execCmd('justifyCenter');"><i class="fa fa-align-center"></i></button>
				<button onclick="execCmd('justifyRight');"><i class="fa fa-align-right"></i></button>
				<button onclick="execCmd('justifyFull');"><i class="fa fa-align-justify"></i></button>
				<button onclick="execCmd('cut');"><i class="fa fa-cut"></i></button>
				<button onclick="execCmd('copy');"><i class="fa fa-copy"></i></button>
				<button onclick="execCmd('indent');"><i class="fa fa-indent"></i></button>
				<button onclick="execCmd('outdent');"><i class="fa fa-dedent"></i></button>
				<button onclick="execCmd('subscript');"><i class="fa fa-subscript"></i></button>
				<button onclick="execCmd('superscript');"><i class="fa fa-superscript"></i></button>
				<button onclick="execCmd('undo');"><i class="fa fa-undo"></i></button>
				<button onclick="execCmd('redo');"><i class="fa fa-repeat"></i></button>
				<button onclick="execCmd('insertUnorderedList');"><i class="fa fa-list-ul"></i></button>
				<button onclick="execCmd('insertOrderedList');"><i class="fa fa-list-ol"></i></button>
				<button onclick="execCmd('insertParagraph');"><i class="fa fa-paragraph"></i></button>
				<button onclick="execCmd('insertHorizontalRule');">HR</button>
				<button onclick="execCommandWithArg('createLink', prompt('Enter a URL', 'http://'));">
					<i class="fa fa-link"></i></button><br>
				<button onclick="execCmd('unlink');"><i class="fa fa-unlink"></i></button>
				<button onclick="toggleSource();"><i class="fa fa-code"></i></button>
				<button onclick="toggleEdit();">Toggle Edit</button>
				<select class="form-control-sm s1" onchange="execCommandWithArg('formatBlock', this.value);">
					<option value="" disabled selected>Headings</option>
					<option value="H1">H1</option>
					<option value="H2">H2</option>
					<option value="H3">H3</option>
					<option value="H4">H4</option>
					<option value="H5">H5</option>
					<option value="H6">H6</option>
				</select>
				<select  class="form-control-sm s2" onchange="execCommandWithArg('fontName', this.value);">
					<option value="" disabled selected>Font Type</option>
					<option value="Arial" style="font-family:Arial;">Arial</option>
					<option value="Comic Sans MS" style="font-family:'Comic Sans MS';">Comic Sans MS</option>
					<option value="Courier" style="font-family:Courier;">Courier</option>
					<option value="Georgia" style="font-family:Georgia;">Georgia</option>
					<option value="Tahoma" style="font-family:Tahoma;">Tahoma</option>
					<option value="Times New Roman" style="font-family:'Times New Roman';">Times New Roman</option>
					<option value="Verdana" style="font-family:Verdana;">Verdana</option>
				</select>
				<select class="form-control-sm s3" onchange="execCommandWithArg('fontSize', this.value);">
					<option value="" disabled selected>Font Size</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
				</select>
				Text Color: <input type="color" onchange="execCommandWithArg('foreColor', this.value);">
				Background: <input type="color"  onchange="execCommandWithArg('hiliteColor', this.value);">
				<button onclick="execCommandWithArg('insertImage', prompt('Enter the image URL', ''));">
					<i class="fa fa-file-image-o"></i></button>
				<button onclick="execCmd('selectAll');">Select All</button>
			</div>
			<iframe name="richTextField"></iframe>
			<script type="text/javascript" src="../libs/js/Editor.js"></script>
		</div>
	</center>
</body>
</html>
