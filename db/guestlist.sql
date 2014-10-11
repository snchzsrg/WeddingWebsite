USE guestlist;

DROP TABLE IF EXISTS guests;
CREATE TABLE guests
(
   id			int unsigned NOT NULL auto_increment,	# Unique ID for the record
   firstname	varchar(255) NOT NULL,		# guest first name
   lastname		varchar(255) NOT NULL,		# guest last name
   email		varchar(255) NOT NULL,		# email address
   lastvisit	timestamp,					# timestamp of last login
   weddingparty	tinyint(1) NOT NULL,		# set for wedding party members
   rehearsaldinner tinyint(1) NOT NULL,		# set for those invited to the rehearsal dinner
   response		tinyint(1) NOT NULL,		# set for RSVP 'yes'
   numAdults	tinyint(4) NOT NULL,		# number of adults (and kids 12+) in the party
   numKids5to11	tinyint(4) NOT NULL,		# number of children ages 5 to 11 in the party
   numKids0to4	tinyint(4) NOT NULL,		# number of children ages 4 or younger
   dietary		text NOT NULL,				# textbox to list dietary restrictions
   message		text NOT NULL,				# textbox denoting a message to the couple

   PRIMARY KEY	(id),
   UNIQUE KEY (email)
);
