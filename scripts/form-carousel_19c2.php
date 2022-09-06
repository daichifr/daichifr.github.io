<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'dfurukawa@cgec.biz',
    'to' => 'info@cgec.biz'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'お名前',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'お名前\' is required.'
    )
    ),
    'EMAIL' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'EMAIL',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'EMAIL\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'メッセージ',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'メッセージ\' is required.'
    )
    ),
    'agree' => array(
    'order' => 4,
    'type' => 'checkbox',
    'label' => 'CGEC内容に同意する',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'CGEC内容に同意する\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>