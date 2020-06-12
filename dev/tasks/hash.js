import crypto from 'crypto';

class hash {
  constructor() {
    this.hash = crypto.randomBytes(8).toString('hex');
  }
  normal() {
    return this.hash;
  }
  date () {
    const date = new Date();
    return date.getFullYear() + (date.getMonth() + 1) + date.getDate() + this.hash
  }
}
export default new hash();
