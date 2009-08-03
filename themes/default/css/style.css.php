<?php
header('Content-type: text/css');

/* Hopefully using color variables makes theme creation a little easier */
static $c = array(
	0	=> '#fff',		// white
	1	=> '#222',		// dark grey
	2	=> '#c6e1ff',	// lightest blue
	3	=> '#a5cfff',	// second lightest blue
	4	=> '#90c4ff',	// light blue
	5	=> '#1e6abf',	// blue
	6	=> '#ff3f13',	// orange
	7	=> '#9d2509'	// dark orange
);

$colors = array();
$colors['background']							=& $c[2];
$colors['a']										=& $c[5];
$colors['a_visited']								=& $c[5];
$colors['h1']										=& $c[1];
$colors['h3']										=& $c[1];
$colors['h4']										=& $c[1];
$colors['base_text']								=& $c[1];
$colors['fade']									=& $c[1];
$colors['hd_background']						=& $c[3];
$colors['hd_text']								=& $c[1];
$colors['tasklist_background']				=& $c[3];
$colors['tasklist_border']						=& $c[3];
$colors['task_background']						=& $c[2];
$colors['task_border']							=& $c[2];
$colors['task_button_background']			=& $c[4];
$colors['task_button_border']					=& $c[4];
$colors['task_button_text']					=& $c[2];
$colors['task_button_hover_background']	=& $c[5];
$colors['task_button_hover_border']			=& $c[5];
$colors['task_button_hover_text']			=& $c[0];
$colors['add_task_border']						=& $c[3];
$colors['add_task_background']				=& $c[3];
$colors['add_task_hover_text']				=& $c[5];
$colors['add_tasklist_hover_border']		=& $c[5];
$colors['add_task_text']						=& $c[5];
$colors['add_tasklist_hover_text']			=& $c[5];
$colors['task_title_background']				=& $c[2];
$colors['task_title_border']					=& $c[4];
$colors['task_title_focus_border']			=& $c[6];
$colors['task_title_focus_background']		=& $c[0];
$colors['add_task_button_text']				=& $c[2];
$colors['add_task_button_background']		=& $c[4];
$colors['add_task_button_border']			=& $c[4];
$colors['add_task_button_hover_border']	=& $c[5];
$colors['add_task_button_hover_background']=&$c[5];
$colors['add_task_button_hover_text']		=& $c[0];
$colors['completed_text']						=& $c[4];
$colors['ui_sortable_helper_border']		=& $c[5];
$colors['ui_sortable_helper_background']	=& $c[5];
$colors['ui_sortable_helper_h3_a']				=& $c[3];
$colors['copyright_text']						=& $c[5];

?>
/********** START: basic **********/
* {
	outline: none;
}

html {
	background: <?php echo $colors['background']; ?>;
	overflow-y: scroll;}

a {
	color: <?php echo $colors['a']; ?>;
	text-decoration: underline;
	font-weight: bold;
}

a:visited {
	color: <?php echo $colors['a_visited']; ?>;
}

h1 a,
h1 a:visited {
	color: <?php echo $colors['h1']; ?>;
	text-decoration: none;
}

h1 a:hover {
}

h1 {
	letter-spacing: -0.05em;
	font-size: 1.6em;
	font-weight: bold;
	background: url('../img/pencil.png') no-repeat 0 8px;
	padding: 0 0 0 25px;
}

h2 {
	font-size: 1.3em;
	font-weight: bold;
	margin-bottom: 10px;
}
h3 { font-size: 1.3em; color: <?php echo $colors['h3']; ?>; font-weight: bold;}
h4 { font-size: 1.1em; font-weight: bold; color: <?php echo $colors['h4']; ?>;}
h5 { font-size: 1em; font-style: italic; font-weight: bold;}
h6 { font-size: 1em; font-weight: bold;}

li {
	margin: 0 0 5px 0;
}

img {
	float: left;
}

#hd, #bd, #ft, #copyright {
	font-size: 1.1em;
	font-family: "Lucida Grande", Helvetica, Arial, sans-serif;
	color: <?php echo $colors['base_text']; ?>;
	margin: 0 auto;
}
#hd { width: 46%; }
#bd { width: 50%; }
#ft { width: 50%; }
#copyright { width: 50%; }

p {
	line-height: 1.4em;h3
	margin-bottom: 20px;
}
.icon {
	background-repeat: no-repeat;
	padding: 4px 5px 3px 22px;
	background-position: 1px 5px;
	margin-bottom: 1px;
}

.small {
	font-size: .6em;
	position: relative;
	top: -0.2em;
	font-family: "Lucida Grande", Helvetica, Arial, sans-serif;
}

.fade {
	color: <?php echo $colors['fade']; ?>;
}

li.icon ul {
	margin-top: 5px;
}

li.icon li {
	list-style-type: circle;
	margin-left: 20px;
}

table th,
table td {
	padding: 5px 5px 5px 0;
}
/********** END: basic **********/

/********** START: hd **********/
#hd {
	background: <?php echo $colors['hd_background']; ?>;
	padding: 5px 20px 10px 20px;
	margin-top: 20px;
	color: <?php echo $colors['hd_text']; ?>;
}
/********** END: hd **********/

/********** START: bd **********/
h3 {
	margin: 0 0 0 10px;
	float: left;
	width: 65%;
}

h3 a {
	text-decoration: none;
}

h3 a:hover {
	text-decoration: underline;
}

.content-box {
	margin-bottom: 20px;
}

#bd-content {
	clear: both;
	margin: 0 auto;
	margin-top: 50px;
}

.bd-section {
	padding: 0 10px 0 15px;
}

.tasklist {
	background: <?php echo $colors['tasklist_background']; ?>;
	padding: 2% 2% 1.5% 2%;
	float: left;
	width: 96%;
	border: 1px solid <?php echo $colors['tasklist_border']; ?>;
}

.tasklist ul {
	float: left;
	clear: both;
	width: 100%;
	padding-top: 3px;
	margin-top: 5px;
}

.tasklist-controls {
	float: right;
	margin-right: 5px;
}

.tasklist-controls form,
.task-controls-2 form {
	display: inline;
}

.num-tasks {
	font-size: 1.3em;
	font-weight: bold;
}

.task {
	background: <?php echo $colors['task_background']; ?>;
	padding: 2% 1% 2% 2%;
	margin-bottom: 3px;
	float: left;
	width: 97%;
	border: 1px solid <?php echo $colors['task_border']; ?>;
}

.task-controls-1{ float: left;	width: 6%;	}
.task-body		 { float: left;	width: 79%;	}
.task-controls-2{ float: right;	width: 15%;	}

.task-controls-1 input {
	position: relative;
	top: 7px;
}

.task-body {
	position: relative;
	top: 5px;
}

.delete-task,
.delete-task:visited,
.delete-tasklist,
.delete-tasklist:visited,
.edit-task,
.edit-task:visited,
.edit-tasklist,
.edit-tasklist:visited {
	padding: 1px 4px 1px 6px;
	background: <?php echo $colors['task_button_background']; ?>;
	text-decoration: none;
	color: <?php echo $colors['task_button_text']; ?>;
	border: 1px solid <?php echo $colors['task_button_border']; ?>;
	font-weight: 900;
	font-family: Arial, sans-serif;
	font-size: 1.4em;
}

.edit-tasklist {
	margin-left: 10px;
}

.delete-task:hover,
.delete-tasklist:hover,
.edit-task:hover,
.edit-tasklist:hover {
	border-color: <?php echo $colors['task_button_hover_border']; ?>;
	background: <?php echo $colors['task_button_hover_background']; ?>;
	color: <?php echo $colors['task_button_hover_text']; ?>;
}

.tasklist-grid-controls {
	padding: 0;
	width: 100%;
}

.add-tasklist,
.add-tasklist:visited {
	width: 100%;
	text-align: center;
	float: left;
	color: <?php echo $colors['add_task_text']; ?>;
	font-weight: 900;
	font-family: Arial, sans-serif;
	font-size: 1.4em;
	text-decoration: none;
}

.add-tasklist:hover {
	border-color: <?php echo $colors['add_tasklist_hover_border']; ?>;
	color: <?php echo $colors['add_tasklist_hover_text']; ?>;
}

.tasklist-editor {
	float: left;
	clear: both;
	width: 99%;
}

.task-title,
.tasklist-title {
	padding: 5px;
	background: <?php echo $colors['task_title_background']; ?>;
	border: 3px solid <?php echo $colors['task_title_border']; ?>;
	float: left;
	width: 63%;
}

.tasklist-title {
	width: 61%;
}

.task-title:focus,
.tasklist-title:focus {
	border-color: <?php echo $colors['task_title_focus_border']; ?>;
	background: <?php echo $colors['task_title_focus_background']; ?>;
}

.add-task label,
.task-editor label,
.tasklist-editor label {
	float: left;
	width: 16%;
	position: relative;
	top: 7px;
}

.tasklist-editor label {
	padding-left: 10px;
}

.add-task {
	border-color: <?php echo $colors['add_task_border']; ?>;
	background: <?php echo $colors['add_task_background']; ?>;
}

.add-task button,
.task-editor button,
.tasklist-editor button {
	padding: 5px 10px;
	border: 1px solid <?php echo $colors['add_task_button_border']; ?>;
	background: <?php echo $colors['add_task_button_background']; ?>;
	font-weight: bold;
	clear: both;
	color: <?php echo $colors['add_task_button_text']; ?>;
}

.add-task button:hover,
.task-editor button:hover,
.tasklist-editor button:hover {
	border-color: <?php echo $colors['add_task_button_hover_border']; ?>;
	background: <?php echo $colors['add_task_button_hover_background']; ?>;
	color: <?php echo $colors['add_task_button_hover_text']; ?>;
}

.add-task span,
.task-editor span,
.tasklist-editor span {
	float: right;
	width: 15%;
	text-align: left;
}

.completed .task-body {
	text-decoration: line-through;
	color: <?php echo $colors['completed_text']; ?>;
}

.ui-sortable-helper {
	background: <?php echo $colors['ui_sortable_helper_background']; ?>;
	border-color: <?php echo $colors['ui_sortable_helper_text']; ?>;
	padding: 1%;
	opacity: .8;
}

.ui-sortable-helper h3 a {
	color: <?php echo $colors['ui_sortable_helper_h3_a']; ?>;
}

.tasklist-editor,
.tasklist-template,
.edit-task-template,
.task-template,
.add-task-template {
	display: none;
}
/********** END: bd **********/

/********** START: ft **********/
#ft {
}
/********** END: ft **********/

/********** START: copyright **********/
#copyright {
	font-size: .9em;
	color: <?php echo $colors['copyright_text']; ?>;
	padding: 10px 0;
	margin-top: 10px;
}

#copyright a {
	font-weight: normal;
	text-decoration: none;
}

#copyright a:hover {
	text-decoration: underline;
}
/********** END: copyright **********/
