<?php
if (isset($_COOKIE['visited'])) {
    echo "Welcome back! You have visited this site before.";
} else {
    echo "Welcome! This is your first visit to this site.";
}
