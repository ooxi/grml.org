<!DOCTYPE html>
<html>
<head>
<title>grml.org - Release Notes: grml 1.1-rc1 Skunk</title>
<meta name="Title" content="grml.org - Release Notes: grml 1.1-rc1 XXX" />
<meta name="Author" content="the grml team [www.grml.org/team/]" />
<meta name="Keywords" content="grml.org, grml" />
<meta name="Description" content="Files of grml.org" />
<meta name="Abstract" content="grml, just another linux-distribution" />
<meta name="fdse-index-as" content="http://www.grml.org/files/" />
<meta name="Robots" content="index,follow" />
<meta name="Language" content="english" />
<meta name="identifier-url" content="http://www.grml.org/" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="home" href="/" title="grml.org" />
<link rel="help" href="/features/" title="About" />
<link rel="author" href="/team/" title="Team" />
<link rel="icon" href="/favicon.png" type="image/png" />
<link rel="stylesheet" href="/style.css" type="text/css" />
</head>

<body>
<?php include '../../static.inc'; ?>

      <div class="content">

        <p><a href="/screenshots/"><img align="right" style="margin-left: 20px;
        border: 0" src="/screenshots/grml_1.1_small.jpg" width="140" alt="*" /></a></p>

        <h1>Release Notes:<br />grml 1.1-rc1 - codename <a
        href="/faq/#releasename">Skunk</a> (20071228)</h1>

        <p><strong>Notice: grml 1.1-rc1 is a RELEASE CANDIDATE and not
        yet the stable release!</strong></p>

        <h3>About</h3>

        <p>grml is a Debian-based Live-CD. It includes a collection of GNU/Linux
        software especially for users of texttools and system administrators.
        grml provides automatic hardware detection. You can use grml for example
        as a rescue system, for analyzing systems/networks or as a working
        environment. It is not necessary to install anything to a harddisk, you
        don't even need a harddisk to run it, unless you want to (use grml2hd
        for this). Due to on-the-fly decompression grml includes about 2.1GB
        of software and documentation on the CD.</p>

        <h3>Bugfixes</h3>

        <p>Fixed several bugs and issues reported on <a
        href="http://wiki.grml.org/doku.php?id=grml_1.0">grml_1.0 @
        grml-wiki</a>.</p>

        <h3>New features</h3>

        <p>Several improved, updated and extended configuration files.</p>

        <h4>New grml-scripts:</h4>

        <ul>

          <li><strong>arename.pl</strong>: rename audio files by looking at a file's tagging
          information</li>

          <li><a href="/grml-live/"><strong>grml-live</strong></a>: build
          framework based on <a
          href="http://fai-project.org/">FAI</a> for generating
          a grml and Debian based Linux Live system (CD/ISO)</li>

        </ul>

        <h4>New bootparameters/cheatcodes:</h4>

        <ul>

          <li><strong>micvol</strong>: configure mixer/ volume settings of
          microphone channel; usage: micvol=$number

          <li><strong>noconsolefont</strong>: skip setting console font via
          consolechars

          <li><strong>nogrmlacpi</strong>: disable acpi stuff inside
          grml-autoconfig without having to boot using noacpi (which triggers
          kernel code actions)

          <li><strong>lvm</strong>: activate present Logical Volumes (LVM)

          <li><strong>nolvm</strong>: completely disable LVM code/checks; by
          default (so without using a special bootoption) grml runs 'lvdisplay'
          and if something can be found the user gets a hint to execute 'Start
          lvm2' to set it up

        </ul>

        <h4><a href="/grml2hd/">grml2hd</a> (install grml to harddisk):</h4>

        <ul>

          <li>use --insecure for passwordbox so user gets feedback when typing
          password (it's '***' of course and not plaintext).

          <li>check for dmraid signatures

          <li>support installation on LVM devices. Usage example:
          'LVM=/dev/mapper/grml2hd-lvm grml2hd'</li>

        </ul>

        <p>See <a href="/grml2hd/">grml.org/grml2hd/</a> for more
        details regarding grml2hd.</p>

        <h4><a href="/terminalserver/">grml-terminalserver</a> (boot
        grml via network)</h4>

        <ul>

          <li>updated initrd generation for use with live-initramfs, providing a
          reworked initial bootprocess</li>

        </ul>

        <p>See <a href="/terminalserver/">grml.org/terminalserver/</a>
        for more details regarding grml-terminalserver.</p>

        <h4>Special new features:</h4>

        <ul>

          <li>all grml ISOs are automatically generated using the new <a
          href="/grml-live/">grml-live framework</a></li>

          <li>completely reworked initial bootprocess, based on live-initramfs
          now</li>

          <li>Squashfs with <a
          href="http://www.squashfs-lzma.org/">LZMA
          support</a></li>

          <li>optimised the system to have as few wakeups as possible (&lt;25
          wakeups/s in default startup)</li>

          <li>updated to X.org 7.3</li>

          <li>updated to libc6 2.7</li>

          <li>the lang=-bootoption supports dvorak keyboard layouts (using
          parameters dvorak, dvorak-iso or dvorak-utf8)</li>

          <!--
          <li>support for Virtualbox guest additions</li>
          -->

        </ul>

        <h3>Kernel</h3>

        <p>Based on vanilla kernel 2.6.23.11 including <a
        href="/kernel/">several patches</a> and additional modules:</p>

<pre class="rahmen">

  acerhk acx100 at76-usb atl2 aufs bcm5700 drbd8 exmap
  gspca ipw3945 iscsitarget ivtv kqemu linux-wlan-ng
  loop-aes lzma madwifi ndiswrapper nozomi openafs pcan
  qc-usb r1000 r5u870 r6040 realtime-lsm rt2400 rt2500 rt73
  sdricoh_cs sl-modem squashfs sysprof tp-smapi truecrypt

</pre>

         <p>Notice: some more modules

         <!-- <a
         href="http://wiki.grml.org/doku.php?id=ati">fglrx</a> and <a
         href="http://wiki.grml.org/doku.php?id=nvidia">nvidia</a>)
         -->

         are not pre-installed but available through the <a
         href="http://deb.grml.org/">grml-repository</a>.</p>

         <p>See <a href="/kernel/">grml.org/kernel/</a> for more details
         regarding the grml-kernel.</p>

         <h3>Important Changes</h3>

         <p>The bootoption <strong>expert</strong> has been dropped. It is
         deprecated nowadays. The bootoption <strong>splash</strong> has been
         renamed into <em>textsplash</em> to avoid clashes with graphical
         bootsplashes.</p>

         <p>Due to the new initial bootprocess (which is based on
         live-initramfs) some <strong>bootoptions</strong> might not work as
         expected or changed its behaviour. The grml team is working on merging
         outstanding features. If you think you found a bootoption that does not
         work as expected/documented please <a
         href="http://grml.org/bugs/">report it</a>.</p>

         <h3>Packages / Software</h3>

         <p>Details about shipped packages and their versions on grml are
         available at the <a href="/files/#debian">Debian section</a>. See <a
         href="/files/release-1.1/dpkg_get_selections">dpkg_get_selections</a>
         for a main package listing and <a
         href="/files/release-1.1/dpkg_list">dpkg_list</a> for a more detailed
         list of packages shipped with grml 1.1.</p>

         <h3>Updates</h3>

         <p>Updated all packages to Debian Unstable branch by 20071225.</p>

         <p>Removed 81 packages [please notice that some of them are available under
         different names/in different packages]:</p>

<pre class="rahmen">
  *2.6.20-grml* lib*

  3ware-3dm2-binary airsnort artwiz-cursor attacker auctex
  autofs bandwidthd-pgsql centericq centericq-common
  checkinstall clvm cogito cpp-2.95 crywrap dbengine debtags
  defrag discover discover-data dnsdoctor dvgrab emacs21
  emacs21-bin-common emacs21-common fbgetty findimagedupes
  flac123 gnuplot gnuplot-nox gnuplot-x11 gnus gnus-bonus-el
  grep-dctrl gs gs-common hwtools idn installation-report
  ion3 ion3-mod-xinerama ion3-scripts irssi-text jail kiss
  lckdo lshw-common modutils mozilla-firefox ncftp2 nessus
  netdude openbsd-inetd pdns python-mode python-semanage
  rhapsody rt2400 rt2500 schedutils scsi-idle sqlrelay
  sqlrelay-postgresql sqlrelay-sqlite squashfs surfraw
  tdb-dev thinkpad-base tinysnmp-tools tpctl trapdoor2 twin
  unison2.9.1 user-de vncommand w3-el-e21 w3-url-e21
  xdebconfigurator xfonts-artwiz xpdf-utils xtla xzgv

</pre>

         <p>Added 164 new packages (exluding lib* and *2.6.23-grml*):</p>

<pre class="rahmen">

  2vcard ack-grep acpi-support-base acpitail aggregate
  aosd-cat apt-transport-https asql awesome balance bittwist
  bsd-mailx centerim-common centerim-utf8 cereal cpp-4.2
  ctorrent dns2tcp duplicity dzen2 ecryptfs-utils edac-utils
  elfkickers emacs22 emacs22-bin-common emacs22-common
  etckeeper exifprobe fai-client fai-doc fai-server fatsort
  firmware-iwlwifi firmware-ralink flashrom fuseiso
  fuseiso9660 g++-4.2 gcc-4.2 gcc-4.2-base gconf2
  gconf2-common ghostscript ghostscript-x git-svn gitpkg
  gksu gnome-keyring gnu-fdisk gnupg-pkcs11-scd gparted
  grml-debian-keyring grml-live grml-paste gzrt haproxy
  hdaps-utils hdapsd hfsprogs hgsvn hplip hplip-data
  iceweasel-webdeveloper ifupdown-extra inoticoming iodine
  irqbalance irssi-plugin-xmpp iscsitarget itop jp2a kanif
  kpartx ldnsutils linux-wlan-ng live-initramfs logapp
  lsb-release lzma mailplate metastore mkelfimage mlocate mr
  nessusclient netrw netsurf nscd nvclock obconf op
  open-iscsi open-vm-tools openbox opencryptoki packeth
  paperkey paris-traceroute pcaputils pm-utils pmailq
  pngtools polipo poppler-utils pristine-tar privbind pssh
  python-dbus python-gnupginterface python-pycallgraph
  python-setuptools python-urlgrabber rinse rofs rt73-common
  runit rutilt s3cmd scanmem shorewall-common
  shorewall-shell sl sm snort-common-libraries splint-data
  squashfs-tools supercat svgalibg1 sysutils taktuk tasksel
  tasksel-data tetex-base tetex-bin texlive tgt
  thinkfinger-tools tra ttf-dejavu-core ttf-dejavu-extra
  uml-utilities unhide uniutils vim-tiny wacom-tools
  wamerican wapiti x11-apps x11-session-utils x11-utils
  x11-xfs-utils x11-xkb-utils x11-xserver-utils xar xauth
  xbacklight xdelta3 xdg-utils xinit xrestop
  xserver-xorg-video-amd xserver-xorg-video-radeonhd yatm
  yeahconsole

</pre>

         <h3>Upgrade notes</h3>

         <p>As usual you can upgrade your grml harddisk system to the latest grml
         version running 'apt-get update; apt-get install grml'. Take a look at <a
         href="http://wiki.grml.org/doku.php?id=upgrading">the upgrading webpage in
         the grml-wiki</a> as well. Notice: If you are using grml in a productive
         environment and/or use a grml2hd installation we strongly recommend to
         subscribe to <a href="http://grml.org/mailinglist/">the grml-user
         mailinglist</a>!</p>

         <h3>Changes since release 1.0 (20070518)</h3>

         <ul>

           <li>Alexander Steinboeck joined <a href="/team/">the grml-team</a>.</li>

           <li>Daily builds available: <a
             href="http://grml.supersized.org/archives/269-Daily-grml-snapshots.html">automatically
             generated ISOs of grml</a> (using <a href="/grml-live/">the
             grml-live framework</a>) are available at <a
             href="http://daily.grml.org/">daily.grml.org</a>.</li>

           <li>Results of the <a
             href="http://wiki.grml.org/doku.php?id=survey07">grml user survey
             are available</a>.</li>

         </ul>

         <h3>Known issues</h3>

         <p>Take a look at <a
           href="http://wiki.grml.org/doku.php?id=release_candidate">grml_release
           candidate @ grml-wiki</a>.  Please report problems using information
         on <a href="/bugs/">grml.org/bugs/</a>.</p>

         <!--
         <p>Take a look at <a
         href="http://wiki.grml.org/doku.php?id=grml_1.1">grml_1.1 @ grml-wiki</a>.
         Please report problems using information on <a
         href="/bugs/">grml.org/bugs/</a>.</p>
         -->

         <h3>Download grml 1.1-rc1</h3>

         <p>grml 1.1-rc1 can be downloaded from mirrors listed on <a
         href="/download/">grml.org/download/</a>.</p>

         <h3>Feedback</h3>

         <p>Your comments, bug reports, patches, and suggestions will help fix bugs
         and improve future releases. If you find a problem with the release please
         check <a href="http://wiki.grml.org/doku.php?id=grml_1.1">grml_1.1 @
         grml-wiki</a> and report problems using information on <a
         href="/bugs/">grml.org/bugs/</a>. Please send your feedback, feature
         requests and bug reports to the grml-team!</p>

         <ul>
           <li><a href="/contact/">grml.org/contact/</a>
           <li><a href="/irc/">#grml on irc.freenode.org</a>
         </ul>

         <h3>Thanks</h3>

         <p>Many thanks in this release go to Henning
         Sprang, Thomas Lange, Michael Schmitt, Daniel
         Baumann, Karl Voit, Norbert Tretkowski, Jan-Pieter
         Jacobs, Wolfgang Karall and Darshaka Pathirana for
         their contributions. Many thanks also to the ones
         of you who <a href="/donations/">donated something
         to the grml-team</a> and of course to all those
         who have sent feedback since the last release!</p>

         <h3>More Information</h3>

         <p>You can find out more about grml on <a href="/">our website</a>, <a
         href="/irc/">IRC channel</a>, and <a href="http://wiki.grml.org/">wiki</a>.

         <p>To sign up for future grml announcements, please subscribe to <a
         href="http://lists.mur.at/mailman/listinfo/grml-announce"> grml's
         announcement list</a>.</p>


         <p><a
         href="http://www.spreadshirt.net/shop.php?article_id=3966156&view_id=4#top"><img
         align="right" style="margin-left: 20px; border: 0"
         src="/img/grmlshirt_0.9.jpg" alt="the grml 0.9 shirt" /></a></p>

         <h3>Further Questions?</h3>

         <p><a href="http://grml.org/contact/">Contact us.</a></p>

</div>

<?php include '../../static_bottom.inc'; ?>
