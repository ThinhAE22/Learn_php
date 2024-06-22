<?php
// Define file names
$inputFile = 'grades.txt';
$outputFile = 'results.txt';

// Read grades from the input file
$grades = file($inputFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Open the output file for writing
$outputHandle = fopen($outputFile, 'w');

// Process each grade
foreach ($grades as $grade) {
    $grade = (int)$grade; // Convert to integer
    if ($grade < 5) {
        $grade += 1;
    }
    // Write the new grade to the output file
    fwrite($outputHandle, $grade . PHP_EOL);
}

// Close the output file handle
fclose($outputHandle);

// Read the updated grades from the output file
$newGrades = file($outputFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Print the new grades
echo "New grades:\n";
foreach ($newGrades as $newGrade) {
    echo $newGrade . "\n";
}
?>