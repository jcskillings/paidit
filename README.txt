paidit README:

Repository located at: https://github.com/jcskillings/paidit

To build this frontend to work you must pull it into some sort of server and run it. This can be done by creating a Cloud 9 account for HTML @ c9.io. You can then type in the command line (git init) and press enter. After this you must specify the related github account by typing (git remote add origin https://github.com/jcskillings/paidit) and pressing enter. You can then fetch the origin by typing (git fetch origin) and pressing enter. There may be a better way to pull the full data, but I have used the command (git reset --hard origin/XXX) where XXX is the branch from which you want to get from, master is the default, but iteration1 is the branch created for iteration one.

You can then open splash.html and press run in the Cloud 9 IDE. This will start running and a link will show up down where the command window was with a link to the served HTML. You can either press this link and have it displayed within Cloud 9, or cut and paste this link into a new window or browser.

You can also go to https://paidit-kyleschenk1.c9.io/splash.html if the server has not timed out.

From the splash page you can register a new user, or login as an existing user. All of the data, user, bills, notifications log, and notification methods are all saved in JSON format to a backend located at https://github.com/jcskillings/pdit_backend. You can create users and check the saved cookie for the current user. When you create an account a text/email will be sent to any valid addresses, this will be used for method verification, which is not currently operational. After registering or logging in, you will be redirected to the home page(index.html). You also cannot visit any page besides the splash without being redirected back to the splash without having a saved currUser cookie to permit you.

You can then traverse the icons at the top of the page to navigate through the pages. On the usersettings page, you can edit your registration info and verify it was done correctly by saving and checking if they were saved. On this page you can also add, delete and edit notification methods. You can create bills on the bills page, and view the bills upcoming for the month on the home page. You can also view bill data in two different graphs on the bill analysis page. The notifications page lists multiple log items that are created as a user does many things, like creating/editing/deleting a bill and much more.
