<?php

$errors         = array();  	// array to hold validation errors
$data 			= array(); 		// array to pass back data

// validate the variables ======================================================
	// if any of these variables don't exist, add an error to our $errors array

	if (empty($_POST['nom']))
		$errors['nom'] = 'Votre nom est requis.';

	if (empty($_POST['prenom']))
		$errors['prenom'] = 'Votre pr&eacute;nom est requis.';
    
	if (empty($_POST['email'])){
		$errors['email'] = 'Votre email est requis.'; 
  }else{
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      $errors['email'] = 'Adresse email incorrecte.'; 
    }
  }  
      
// return a response ===========================================================

	// if there are any errors in our errors array, return a success boolean of false
	if ( ! empty($errors)) {

		// if there are items in our errors array, return those errors
		$data['success'] = false;
		$data['errors']  = $errors;
	} else {

		// if there are no errors process our form, then return a message

		// DO ALL YOUR FORM PROCESSING HERE
		// THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)

		// show a message of success and provide a true success variable
		$data['success'] = true;
		$data['message'] = 'Merci pour votre engagement!';
	}

	// return all our data to an AJAX call
	echo json_encode($data);