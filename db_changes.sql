alter table castings add catalognumber varchar(255);
alter table castings add version varchar(255);
alter table castings add modeldate varchar(255);
alter table castings add patina varchar(255);
alter table castings add micromeasurements text;

alter table artworks add alttitle varchar(1000);

-- 2015-12-23 add essay id fields

alter table artworks add checklist_id_wp int;
alter table artworks add essay_id_wp int;

-- 2016-02-01 add caption

alter table relatedimages add caption varchar(1000);