<?php

Use Core\Session;
//log the user out.

Session::destroy();

header('location:/');
exit();