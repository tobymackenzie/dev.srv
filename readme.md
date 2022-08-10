dev.srv
=======

Simple local dev LAMP setup using Vagrant and VirtualBox.  If you have those two installed, just `vagrant up`.  The server will be available at the IP `192.168.56.200`, or `127.0.0.1:2022` if that fails.

The default virtual host will show everything in the `sites` folder, which is shared from the local machine.  It will respond to the domain `dev.l`.  Any folders in the sites folder will also have their own available domain like `folder.l`, where `sites/folder/web` is the webroot for that domain.  To use these domains for access, you can add them to your local `/etc/hosts`, eg:

```
192.168.56.200  dev.l
192.168.56.200  folder.l
192.168.56.200  foo.l
```

<footer>
<p>SPDX-License-Identifier: 0BSD</p>
</footer>
