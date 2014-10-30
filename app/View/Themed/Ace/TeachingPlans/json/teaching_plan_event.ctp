<?php

//debug($teachingPlans);die;
$i = 0;
foreach ($teachingPlans as $event) {
    $session = 'Buổi sáng';
    if ($event['TeachingPlan']['session'] == 'C') {
        $session = 'Buổi chiều';
    }
    $backgroundColor = ($event['TeachingPlan']['session'] == 'S') ? '#0071BF' : '#FFB752';
    $events[$i]['id'] = $event['TeachingPlan']['id'];
    $events[$i]['title'] = $session;
    $events[$i]['start'] = $event['TeachingPlan']['date'];
    $events[$i]['backgroundColor'] = $backgroundColor;
    $i++;
}

echo json_encode(($events));
