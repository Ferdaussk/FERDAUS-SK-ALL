<?php
// Lean Body Mass (LBM) ============//////////////////
function calculateLeanBodyMass($totalWeight, $bodyFatPercentage) {
    // Ensure that the body fat percentage is in decimal form (e.g., 20% => 0.20)
    $bodyFatDecimal = $bodyFatPercentage / 100;

    // Calculate Lean Body Mass
    $leanBodyMass = $totalWeight * (1 - $bodyFatDecimal);

    return $leanBodyMass;
}

// Example usage
$totalWeight = 70; // Replace with your actual total body weight
$bodyFatPercentage = 15; // Replace with your actual body fat percentage

$leanBodyMass = calculateLeanBodyMass($totalWeight, $bodyFatPercentage);

echo "Total Body Weight: {$totalWeight} kg\n";
echo "Body Fat Percentage: {$bodyFatPercentage}%\n";
echo "Lean Body Mass: {$leanBodyMass} kg\n";

echo "<br>";

// Body Fat Percentage ============//////////////////
function calculateBodyFatPercentage($weight, $height, $waistCircumference, $gender) {
    // Calculate BMI
    $bmi = $weight / ($height * $height);

    // Determine gender-specific constants
    $maleConstant = -98.42;
    $femaleConstant = -76.76;

    // Calculate body fat percentage using BMI and waist circumference
    if ($gender === 'male') {
        $bodyFatPercentage = $maleConstant + (4.15 * $waistCircumference) - (0.082 * $weight) / $weight * 100;
    } elseif ($gender === 'female') {
        $bodyFatPercentage = $femaleConstant + (4.15 * $waistCircumference) - (0.082 * $weight) / $weight * 100;
    } else {
        // Handle other gender options if needed
        $bodyFatPercentage = null;
    }

    return $bodyFatPercentage;
}

// Example usage
$weight = 70; // Replace with your actual weight in kilograms
$height = 1.75; // Replace with your actual height in meters
$waistCircumference = 80; // Replace with your actual waist circumference in centimeters
$gender = 'male'; // Replace with 'female' if applicable

$bodyFatPercentage = calculateBodyFatPercentage($weight, $height, $waistCircumference, $gender);

if ($bodyFatPercentage !== null) {
    echo "Weight: {$weight} kg\n";
    echo "Height: {$height} m\n";
    echo "Waist Circumference: {$waistCircumference} cm\n";
    echo "Gender: {$gender}\n";
    echo "Estimated Body Fat Percentage: {$bodyFatPercentage}%\n";
} else {
    echo "Invalid gender specified.\n";
}

echo "<br>";

// Body Fat Percentage ============//////////////////
function calculateIdealBodyWeight($height, $gender) {
    // Constants for Devine formula
    $maleConstant = 50;
    $femaleConstant = 45.5;

    // Determine the appropriate constant based on gender
    $constant = ($gender === 'male') ? $maleConstant : $femaleConstant;

    // Calculate Ideal Body Weight
    $idealBodyWeight = $constant + (2.3 * ($height - 60));

    return $idealBodyWeight;
}

// Example usage
$height = 175; // Replace with your actual height in centimeters
$gender = 'male'; // Replace with 'female' if applicable

$idealBodyWeight = calculateIdealBodyWeight($height, $gender);

echo "Height: {$height} cm\n";
echo "Gender: {$gender}\n";
echo "Estimated Ideal Body Weight: {$idealBodyWeight} kg\n";
echo "<br>";

// Waist-to-Hip Ratio ============//////////////////
function calculateWaistToHipRatio($waistCircumference, $hipCircumference) {
    // Ensure that both circumferences are greater than zero to avoid division by zero
    if ($waistCircumference <= 0 || $hipCircumference <= 0) {
        return null;
    }

    // Calculate Waist-to-Hip Ratio
    $whr = $waistCircumference / $hipCircumference;

    return $whr;
}

// Example usage
$waistCircumference = 80; // Replace with your actual waist circumference in centimeters
$hipCircumference = 100; // Replace with your actual hip circumference in centimeters

$whr = calculateWaistToHipRatio($waistCircumference, $hipCircumference);

if ($whr !== null) {
    echo "Waist Circumference: {$waistCircumference} cm\n";
    echo "Hip Circumference: {$hipCircumference} cm\n";
    echo "Waist-to-Hip Ratio: {$whr}\n";
} else {
    echo "Invalid circumferences specified.\n";
}

echo "<br>";

// Basal Metabolic Rate (BMR) by Harris-Benedict Equation ============//////////////////
function calculateBMR($weight, $height, $age, $gender) {
    if ($gender === 'male') {
        $bmr = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
    } elseif ($gender === 'female') {
        $bmr = 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
    } else {
        // Handle other gender options if needed
        $bmr = null;
    }

    return $bmr;
}

// Example usage
$weight = 70; // Replace with your actual weight in kilograms
$height = 175; // Replace with your actual height in centimeters
$age = 30; // Replace with your actual age
$gender = 'male'; // Replace with 'female' if applicable

$bmr = calculateBMR($weight, $height, $age, $gender);

if ($bmr !== null) {
    echo "Weight: {$weight} kg\n";
    echo "Height: {$height} cm\n";
    echo "Age: {$age} years\n";
    echo "Gender: {$gender}\n";
    echo "Estimated BMR: {$bmr} calories/day\n";
} else {
    echo "Invalid gender specified.\n";
}

echo "<br>";

// Water Intake Calculator ============//////////////////
function calculateWaterIntake($weight) {
    // Water intake guideline: 30-35 milliliters per kilogram of body weight
    $minWaterIntake = 30 * $weight;
    $maxWaterIntake = 35 * $weight;

    return [$minWaterIntake, $maxWaterIntake];
}

// Example usage
$weight = 70; // Replace with your actual weight in kilograms

list($minWaterIntake, $maxWaterIntake) = calculateWaterIntake($weight);

echo "Weight: {$weight} kg\n";
echo "Recommended Daily Water Intake: {$minWaterIntake} - {$maxWaterIntake} milliliters\n";

echo "<br>";

// Body Surface Area ============//////////////////
function calculateBodySurfaceArea($height, $weight) {
    // Calculate Body Surface Area using the Du Bois formula
    $bsa = 0.007184 * pow($height, 0.725) * pow($weight, 0.425);

    return $bsa;
}

// Example usage
$height = 175; // Replace with your actual height in centimeters
$weight = 70; // Replace with your actual weight in kilograms

$bsa = calculateBodySurfaceArea($height, $weight);

echo "Height: {$height} cm\n";
echo "Weight: {$weight} kg\n";
echo "Estimated Body Surface Area: {$bsa} square meters\n";










