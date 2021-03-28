<?php
    include 'header.html';
?>

    <h1>Buy Your Way to a Better Education!</h1>

    <p>
        The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
    </p>

    <hr />

    <h2>Give Us Your Money</h2>
<form action="sucker.php" method="post">
    <dl>
        <dt>Name</dt>
        <dd>
            <input type="text" name="name">
        </dd>

        <dt>Section</dt>
        <dd>
            <select name="section">
                <option value="MA">MA</option>
                <option value="MH">MH</option>
            </select>
        </dd>

        <dt>Credit Card</dt>
        <dd>
            <input type="text" name="credit_card">
        </dd>
        <dt>
            <dd><input type="radio" name="type_credit" value="visa" >Visa</dd>
            <dd><input type="radio" name="type_credit" value="mastercard">MasterCard</dd>
        </dt>

        <input type="submit" value="I am a giant sucker">
    </dl>
</form>

<?php
include 'footer.html';
?>
