<?php

/**
 * --- Day 1: Inverse Captcha ---
 *
 * The night before Christmas, one of Santa's Elves calls you in a panic. "The
 * printer's broken! We can't print the Naughty or Nice List!" By the time you
 * make it to sub-basement 17, there are only a few minutes until midnight. "We
 * have a big problem," she says; "there must be almost fifty bugs in this
 * system, but nothing else can print The List. Stand in this square, quick!
 * There's no time to explain; if you can convince them to pay you in stars,
 * you'll be able to--" She pulls a lever and the world goes blurry.
 *
 * When your eyes can focus again, everything seems a lot more pixelated than
 * before. She must have sent you inside the computer! You check the system
 * clock: 25 milliseconds until midnight. With that much time, you should be
 * able to collect all fifty stars by December 25th.
 *
 * Collect stars by solving puzzles. Two puzzles will be made available on each
 * day millisecond in the advent calendar; the second puzzle is unlocked when
 * you complete the first. Each puzzle grants one star. Good luck!
 *
 * You're standing in a room with "digitization quarantine" written in LEDs
 * along one wall. The only door is locked, but it includes a small interface.
 * "Restricted Area - Strictly No Digitized Users Allowed."
 *
 * It goes on to explain that you may only leave by solving a captcha to prove
 * you're not a human. Apparently, you only get one millisecond to solve the
 * captcha: too fast for a normal human, but it feels like hours to you.
 *
 * The captcha requires you to review a sequence of digits (your puzzle input)
 * and find the sum of all digits that match the next digit in the list. The
 * list is circular, so the digit after the last digit is the first digit in
 * the list.
 *
 * For example:
 * 1122 produces a sum of 3 (1 + 2) because the first digit (1) matches the
 *      second digit and the third digit (2) matches the fourth digit.
 * 1111 produces 4 because each digit (all 1) matches the next.
 * 1234 produces 0 because no digit matches the next.
 * 91212129 produces 9 because the only digit that matches the next one is the
 *      last digit, 9.
 */

// Generated input
$input = '616976379622766413664422972473671177381147198634736481319824497286881'
    . '167286958665729895244733929829639764111476835884158782141899961635335845'
    . '471757941581181487242988327988983333997865614591526441446699598873414819'
    . '683191729873579897857913667328499327883437721121766147238584749599197138'
    . '553988769564276313541726681335498455856322119355736621813316131378698666'
    . '932593743221698116836353253215972428893581471233581177749146537873713685'
    . '747843767216521817923716352883767297849675268249151925267449351879895713'
    . '477462221136255779634761419231875346584456155969876143859115139392922572'
    . '637235187748881746359632546247696845335314437457293443419737464693268381'
    . '862484484835874775632858674999564462187752323743834339218359931364633836'
    . '288611155731428543589432911487662996536331955821359345449646576631983877'
    . '944424435319646151696552436526967824433946391696878474637215855279478399'
    . '921824153931999648936583227576346752744229932379553541851948686384548914'
    . '428939356944543242359681559139632826426499681532846261541114783899143167'
    . '657834343654583527858688955824883123349313179356694534474789369385336699'
    . '211654373737414483784773918127799715289754782986887549392164214292517275'
    . '555964819433222662895279966728563876486741669977313425589865752587932619'
    . '868171774871975122821629641671512594857448358545475133413226477326624435'
    . '122518867718876516141776792299842711912923747559154573727758561785399651'
    . '313195682782523262426151514127722542578474137998114172874813217453728795'
    . '137662357453478726329467765381736673712289772121439963916179743679234399'
    . '237743885238455897693413511673113987877975835434347253743436117243793995'
    . '661974321541468813445283198264345542393736669625462712997177435912255675'
    . '646555113532551975165152139638623837622589599574747897185647588433673257'
    . '945898868524133147136989118551837789787225587423294298672392614647736463'
    . '894843184465743753236741366384521738151767323854686752152647367862428662'
    . '956489973654126374996928177479379826285189263819392799359937124189385674'
    . '88289246779458432179335139731952167527521377546376518126276';

$input .= $input[0]; // List is circular, the first one needs to be repeated
$sanitized = []; // Place holder for sanitized list

for ($i=0; $i < strlen($input) -1; $i++) {
    $a = $input[$i];
    $b = $input[$i + 1];

    if ($a === $b) $sanitized[] = $a; // push to stack
}

$result = array_sum($sanitized);

echo 'Result is ' . $result . PHP_EOL;