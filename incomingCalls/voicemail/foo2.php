<?php

    header("content-type: text/xml");
    echo('<?xml version="1.0" encoding="UTF-8"?>');

?>
<Response>
    <Gather timeout="10" finishOnKey="*">
        <Say>Please enter your pin number and then press star.</Say>
    </Gather>
</Response>
