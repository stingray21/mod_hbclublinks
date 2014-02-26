--
-- Table structure for table `hb_link`
--

CREATE TABLE IF NOT EXISTS `hb_link` (
  `linkID` int(3) NOT NULL AUTO_INCREMENT,
  `reihenfolge` int(3) DEFAULT NULL,
  `kategorie` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linktext` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`linkID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;