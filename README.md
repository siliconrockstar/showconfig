# showconfig
Tiny Magento module that will dump the global config object if you 
append the GET parameter ?showConfig=1 to the URL

Note: Please don't use this on production systems, it doesn't
expose any passwords but it does make your installation
easier to scan for potentially vulnerable modules.

Example usage:

http://mymagentoinstall.com/any/path/at/all/?showConfig=1
