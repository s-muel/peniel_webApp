<?php
function session_messages($message,$title,$position,$type,$close_text,$ok_text,$ok_action){
	$_SESSION['message'] = $message;
	$_SESSION['title'] = $title;
	$_SESSION['modal_position'] = $position;
	$_SESSION['modal_type'] = $type;
	$_SESSION['modal_close_text'] = $close_text;
	$_SESSION['modal_ok_text'] = $ok_text;
	$_SESSION['modal_ok_action'] = $ok_action;
}

function unset_session_message(){
	unset($_SESSION['message']);
	unset($_SESSION['title']);
	unset($_SESSION['modal_position']);
	unset($_SESSION['modal_type']);
	unset($_SESSION['modal_close_text']);
	unset($_SESSION['modal_ok_text']);
	unset($_SESSION['modal_ok_action']);
}

function show_session_message(){
	if(isset($_SESSION['message'])){
		echo"
		<script>
			Swal.fire(
			  '".$_SESSION['title']."',
			  '".$_SESSION['message']."',
			  '".$_SESSION['modal_type']."'
			);
		</script>
			";
		unset_session_message();
	}
}
?>