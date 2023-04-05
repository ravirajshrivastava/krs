function printError(elemId, hintMsg)
{
    document.getElementById(elemId).innerHTML = hintMsg;
}
var submit = document.getElementById("loginButton");
console.log(submit) = function()
{
    validateform();
}
function validateform()
{
    // console.log("hsds")
    var form = document.getElementById("myform")
    var username = form.username.value
    var userphone = form.userphone.value
    var useremail = form.useremail.value
    var usergender = form.usergender.value
    var userqualification = form.userqualification.value
    var usercourse = form.usercourse.value
    var checkbox = form.checkbox.value
    
    var usernameErr = true;
    var userphoneErr = true;
    var useremailErr = true;
    var usergenderErr = true;
    var userqualificationErr = true;
    var usercourseErr = true;
    var checkboxErr = true;
     

    if (username == "") 
    {
        printError("usernameErr","Space can not be empty");
    } 
    else
    {
        if(username.length<2)
        {
            printError("usernameErr", "Please enter valid name");
        }  
        else
        {
            printError("usernameErr", "");
            usernameErr = false;
        }
    }
    if (userphone == "")
    {
        printError("userphoneErr","space  can not be empty");
    }
    else
    {
        if(userphone.length<10)
        {
            printError("userphoneErr", "Please enter valid phone number");  
        } 
        // }else if(!usernamelist.includes(username)){
        //     printError("usernameErr", "username is not registered"); 
        // }
        else
        {
            printError("userphoneErr", "");
            userphoneErr = false;
        }
    }
    if(useremail== "")
    {
        printError("useremailErr","Space can not be empty");
    }
    else
    {
        if(useremail.includes("@"))
        {
            printError("useremailErr","Please enter a valid email address");
        }
        else
        {
            printError("useremailErr","");
            useremailErr = true;
        }
    }
    if(usergender == "")
    {
        printError("usergenderErr","Must select one box");
    }
    else
    {
        printError("usergenderError","");
        usergenderErr = false;
    }
    if(usercourse == "")
    {
        printError("usercourseErr","Must select at least one box");
    }
    else
    {
        printError("usercourse","");
        usercourseErr = false;
    }
    if(userqualification == "")
    {
        printError("userqualification","Must select one box");
    }
    else
    {
        printError("userqualification","")
        userqualificationErr = false;
    }
    if(checkbox == "")
    {
        printError("checkbox","Must select to procced further");
    }
    else
    {
        printError("checkbox","")
        checkboxErr = false;
    }
    console.log(usernameErr, userphoneErr, useremailErr, usergenderErr, usercourseErr, userqualificationErr, checkboxErr)
    if ((usernameErr || userphoneErr || useremailErr || usergenderErr || usercourseErr || userqualificationErr || checkboxErr) == true)
    {
        return false;
    } 
    else
    {
        alert(console.log("You have successfully registered."));
    }
}