# Set HTPass in Apache server

## Create http user in server using terminal/command line
`htpasswd -c /location/where/you/want .htpasswd username`

> You an set a location anywhere in your server
> You can change the file name `.htpasswd` to anything you want
> Replace the `username` with whatever you want
> Hit **Enter**, it'll ask for the new password
> Put the password, enter, password again, enter


## Restrict a directory 

```
AuthName "Restricted Area"
AuthType Basic
AuthUserFile /location/where/you/want/.htpasswd
require valid-user
```

> Open the directory you want to protect
> Create `.htaccess` file, (Open if already exist)
> Put this code into your `.htaccess` file
> **Make sure to change the location name with your actual `.htpasswd` location.**
> Save

### Isn't it easy? Yeah, very easy!
