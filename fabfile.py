from fabric.api import env, roles, run, cd

# Define sets of servers as roles
env.roledefs = {
    'web': ['grandlakekitchen.dreamhosters.com'],
}

# Set the user to use for ssh
env.user = 'ericclients'


@roles('web')
def deploy():
    with cd('~/grandlakekitchen.com'):
        run('git checkout master')
        run('git pull origin master')