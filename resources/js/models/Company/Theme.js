export default class Theme {
    static details(CompanyId) {
        return new Promise((resolve, reject) => {
            axios.post('/api/company-theme', {
                CompanyId: CompanyId,
            })
                .then(({data}) => {
                    resolve(data);
                })
                .catch((error) => {
                    reject(error);
                });
        });
    }
}
