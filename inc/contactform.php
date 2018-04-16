<div id="errors">
    <p>
        Please fix the following errors:
    </p>
    <div id="errorMessages">

    </div>
</div>
<!-- submit.php -->
<form method="post" action="submit.php" id="contactForm">
    <fieldset>
        <legend>Contact Us</legend>
        <table>
            <tr>
                <td>
                    <label>First Name</lable>
                </td>
                <td>
                    <input type="text" name="firstname" id="firstname" class="required hilightable" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Last Name</lable>
                </td>
                <td>
                    <input type="text" name="lastname" id="lastname" class="required hilightable" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Email</lable>
                </td>
                <td>
                    <input type="email" name="email" id="email" placeholder="john.doe@gmail.com" class="required hilightable" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Phone</lable>
                </td>
                <td>
                    <input type="tel" name="phonenumber" id="phonenumber" placeholder="(123)456-7890" class="hilightable" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>What infomration would you like to learn more about?</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="box">
                        <input type="checkbox" name="moreinfo">General addiction<br/>
                        <input type="checkbox" name="moreinfo">Internet addiction <br/>
                        <input type="checkbox" name="moreinfo">Phone addiction    
                    </div>
                </td>
                <td>
                    <div class="box">
                        <input type="checkbox" name="moreinfo">Addiction help and resources<br/>
                        <input type="checkbox" name="moreinfo">Local groups and organizations<br/>
                        <input type="checkbox" name="moreinfo">Weekly updates
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>
                        How did you hear about us?
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <select name="references"  id="references" class="hilightable">
                        <option selected> Choose One </option>
                        <option>Friend or family member</option>
                        <option>Web search</option>
                        <option>Group or organization</option>
                        <option>Posting or flier</option>
                        <option>Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="customcenter">
                    <div class="g-recaptcha centered" data-sitekey="6LePZVMUAAAAAEjWc_BX58W9CM9LGcE1eBXPMv_G"></div>
                    </div>
                <td>
            </tr>
            <tr>
                <td>
                    <input type="submit" id="register" class="button centered">
                </td>
                <td>
                    <input type="reset" value="Clear Form" class="button centered">
                </td>
            </tr>
        </table>
    </fieldset>
</form>