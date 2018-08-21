# WkHtmlToPdf binaries
Provides WkHtmlToPdf binaries for different OS's and architectures.

```
use corpoflow\WkHtmlToPdfBinary\WkHtmlToPdfBinary;

...Somewhere in your code

# Use however you need it
echo WkHtmlToPdfBinary::path(); // Will output the absolute path to the WkHtmlToPdf binary for your OS's version and architecture

```

### Why?
This repo exists mainly for https://github.com/mikehaertl/phpwkhtmltopdf, which requires you to provide the path to the binary, but doesn't provide binaries itself.

### Current versions
- linux x64: `wkhtmltopdf 0.12.5-dev (with patched qt)`
- linux x32: `wkhtmltopdf 0.12.4 (with patched qt)` (UNTESTED)
- windows x64: `wkhtmltopdf 0.12.4 (with patched qt)` (UNTESTED)
- windows x32: `wkhtmltopdf 0.12.4 (with patched qt)` (UNTESTED)
