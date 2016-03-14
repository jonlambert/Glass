@servers(['web' => 'root@schoolsbroadcast.org.uk'])

@task('deploy')
    cd /path/to/site
    git pull origin master
@endtask
