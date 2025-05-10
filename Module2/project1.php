<?php

$name1 = "";
$phone1 = "";
$name2 = "";
$phone2 = "";

while (true) {
    echo "\n========= Contact Manager =========\n";
    echo "1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";

    echo "Enter a Choice: ";
    $choice = trim(fgets(STDIN));

    if ($choice == "1") {
        if ($name1 == "") {
            echo "Enter name for Contact 1: ";
            $name1 = trim(fgets(STDIN));
            echo "Enter phone for Contact 1: ";
            $phone1 = trim(fgets(STDIN));
            echo "Contact 1 saved successfully!\n";
        } elseif ($name2 == "") {
            echo "Enter name for Contact 2: ";
            $name2 = trim(fgets(STDIN));
            echo "Enter phone for Contact 2: ";
            $phone2 = trim(fgets(STDIN));
            echo "Contact 2 saved successfully!\n";
        } else {
            echo "❗ You can only save up to 2 contacts.\n";
        }
    } elseif ($choice == "2") {
        echo "\n===== Saved Contacts =====\n";
        if ($name1 != "") {
            echo "Contact 1: $name1 - $phone1\n";
        }
        if ($name2 != "") {
            echo "Contact 2: $name2 - $phone2\n";
        }
        if ($name1 == "" && $name2 == "") {
            echo "No contacts saved yet.\n";
        }
    } elseif ($choice == "3") {
        echo "Exiting Contact Manager. Goodbye!\n";
        break;
    } else {
        echo "Invalid choice. Please enter 1, 2, or 3.\n";
    }
}


?>