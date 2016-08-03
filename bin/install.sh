DIR="$(dirname "$0")"

# sudo ${DIR}/console cache:clear --no-warmup

source ${DIR}/entity.sh

${DIR}/console translation:update  --force --dump-messages en AppBundle
${DIR}/console translation:update  --force --dump-messages cs AppBundle
${DIR}/console translation:update  --force --dump-messages sk AppBundle
${DIR}/console translation:update  --force --dump-messages jp AppBundle