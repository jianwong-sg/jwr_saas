
Runner.pages.PageSettings.addPageEvent( 
	'<global>', 
	"register", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {

		if(proxy.regstatus==0)
{
alert(proxy.regfalsemsg)
}
	});


Runner.pages.PageSettings.addPageEvent( 
	'<global>', 
	"menu", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {

		function triggerAlerts() {
    if (proxy["expiry"]) {
        swal({
            title: 'Subscription Expiry Reminder',
            text: "Your subscription plan will expire in " + proxy["expiry"] + " days.",
            icon: "info"
        }).then(() => {
            // Trigger the next alert for agency address
            if (proxy["address"]) {
                return swal({
                    title: 'Update Estate Agent Profile',
                    text: 'Your Estate Agent profile requires attention. Please proceed to "EA Profile" in "Settings" to ensure it is complete and up-to-date.\nOnly users with Admin rights can access "Settings".',
                    icon: 'warning'
                });
            }
        }).then(() => {
            // Trigger the next alert for user mobile
            if (proxy["mobile"]) {
                return swal({
                    title: 'Update User Profile',
                    text: 'Your profile requires attention. Please proceed to "User Profile" in "Settings" to update your profile information.',
                    icon: 'warning'
                });
            }
        });
    } else if (proxy["address"]) {
        swal({
            title: 'Update Estate Agent Profile',
            text: 'Your Estate Agent profile requires attention. Please proceed to "EA Profile" in "Settings" to ensure it is complete and up-to-date.\nOnly users with Admin rights can access "Settings".',
            icon: 'warning'
        }).then(() => {
            // Trigger the next alert for user mobile
            if (proxy["mobile"]) {
                return swal({
                    title: 'Update User Profile',
                    text: 'Your profile requires attention. Please proceed to "User Profile" in "Settings" to update your profile information.',
                    icon: 'warning'
                });
            }
        });
    } else if (proxy["mobile"]) {
        swal({
            title: 'Update User Profile',
            text: 'Your profile requires attention. Please proceed to "User Profile" in "Settings" to update your profile information.',
            icon: 'warning'
        });
    }
}

// Call the function to trigger alerts
triggerAlerts();
	});




